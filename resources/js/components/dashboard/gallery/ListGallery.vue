<template>
    <div class="bg-white p-4 rounded shadow border-0">
        <table class="table text-center">
            <thead>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Deshacer</th>
            </thead>
            <tbody>
                <tr v-for="(item, index) in items" :key="item.id">
                    <td>{{ item.title }}</td>
                    <td>
                        <img
                            style="width:15em"
                            :src="item.url"
                            class="responsive"
                            :alt="item.title"
                        />
                    </td>
                    <td>
                        <delete-item :id="item.id" :index="index"></delete-item>
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
            items: [],
            page:1
        };
    },
    components: { DeleteItem ,InfiniteLoading},
    methods:{
        infiniteHandler($state) {
            axios
                .get(`/gallery`, {
                    params: {
                        page: this.page
                    }
                })
                .then(res => {
                    if (res.data.data.length) {
                        this.page += 1;
                        this.items = this.items.concat(res.data.data);
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
        EventBus.$on("saved-image", item => {
            this.items.unshift(item);
        });
        EventBus.$on("item-removed", index => {
            this.items.splice(index, 1);
        });
    }
};
</script>
