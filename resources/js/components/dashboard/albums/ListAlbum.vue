<template>
    <div class="p-4 rounded shadow border-0 bg-white">
        <table class="table text-center mb-0 table-sm">
            <thead>
                <th>Título</th>
                <th>Codigo del video</th>
                <th>Deshacer</th>
            </thead>
            <tbody>
                <tr v-for="(album, index) in albums" :key="album.id">
                    <td>{{ album.name }}</td>
                    <td>{{ album.musical_genre.slice(0, 50) }}...</td>
                    <td>
                        <delete-item
                            :id="album.id"
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
            albums: [],
            page: 1
        };
    },
    components: { InfiniteLoading, DeleteItem },
    methods: {
        infiniteHandler($state) {
            axios
                .get(`/albums`, {
                    params: {
                        page: this.page
                    }
                })
                .then(res => {
                    if (res.data.data.length) {
                        console.log(res.data.data.length);
                        this.page += 1;
                        this.albums = this.albums.concat(res.data.data);
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
        EventBus.$on("album-saved", album => {
            this.albums.unshift(album);
        });
        EventBus.$on("album-removed",(index) => {
            this.albums.splice(index,1);
        })
    }
};
</script>
