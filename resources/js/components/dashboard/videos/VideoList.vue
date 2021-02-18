<template>
    <div class="p-4 rounded shadow border-0 bg-white">
        <table class="table text-center mb-0 table-sm">
            <thead>
                <th>Título</th>
                <th>Codigo del video</th>
                <th>Deshacer</th>
            </thead>
            <tbody>
                <tr v-for="(video, index) in videos" :key="video.id">
                    <td>{{ video.title }}</td>
                    <td>{{ video.video.slice(0, 30) }}...</td>
                    <td>
                        <delete-item
                            :id="video.id"
                            :index="index"
                        ></delete-item>
                    </td>
                </tr>
            </tbody>
        </table>
        <infinite-loading @infinite="infiniteHandler"></infinite-loading>
    </div>
</template>
<script>
import InfiniteLoading from "vue-infinite-loading";
import DeleteItem from "./DeleteItem.vue";
export default {
    data() {
        return {
            videos: [],
            page: 1
        };
    },
    components: { InfiniteLoading, DeleteItem },
    methods: {
        infiniteHandler($state) {
            axios
                .get(`/videos`, {
                    params: {
                        page: this.page
                    }
                })
                .then(res => {
                    if (res.data.data.length) {
                        console.log(res.data.data.length);
                        this.page += 1;
                        this.videos = this.videos.concat(res.data.data);
                        $state.loaded();
                    } else {
                        $state.complete();
                    }
                })
                .catch(err => {
                    console.log(err.response.data);
                });
        }
    },
    mounted() {
        EventBus.$on("video-saved", video => {
            this.videos.unshift(video);
        });
        EventBus.$on("video-removed",(index) => {
            this.videos.splice(index,1);
        })
    }
};
</script>
