<template>
    <div class="bg-white p-4 rounded shadow border-0">
        <table class="table text-center">
            <thead>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Deshacer</th>
            </thead>
            <tbody>
                <tr v-for="item in items" :key="item.id">
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
                        <delete-item :id="item.id"></delete-item>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import DeleteItem from "./DeleteItem.vue"
export default {
    data() {
        return {
            items: []
        };
    },
    components:{DeleteItem},
    mounted() {
        EventBus.$on("saved-image", item => {
            this.items.unshift(item);
        });
        EventBus.$on("item-removed",(index) => {
            this.items.splice(index,1);
        })
    }
};
</script>
