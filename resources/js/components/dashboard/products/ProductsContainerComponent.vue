<template>
    <div>
        <div class="d-flex flex-wrap justify-content-center">
            <show-product
                v-for="product in products"
                :key="product.id"
                :product="product"
                class="mr-2"
            >
            </show-product>
        </div>
        <infinite-loading @infinite="infiniteHandler"></infinite-loading>
    </div>
</template>
<script>
import InfiniteLoading from "vue-infinite-loading";
export default {
    data() {
        return {
            products:[],
            page: 1
        };
    },
    components: {
        InfiniteLoading
    },
    methods: {
        infiniteHandler($state) {
            axios
                .get(`/products`, {
                    params: {
                        page: this.page
                    }
                })
                .then(res => {
                    if (res.data.data.length) {
                        console.log(res.data.data.length)
                        this.page += 1;
                        this.products = this.products.concat(res.data.data);
                        $state.loaded();
                    } else {
                        $state.complete();
                    }
                })
                .catch(err => {
                    console.log(err.response.data);
                });
        }
    }
};
</script>
