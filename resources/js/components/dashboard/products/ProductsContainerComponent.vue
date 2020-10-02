<template>
    <div>
        <div class="d-flex flex-wrap justify-content-center">
            <show-product
                v-for="(product,index) in products"
                :key="product.id"
                :product="product"
                class="mr-2"
                :index=index
            >
            </show-product>
        </div>
        <infinite-loading @infinite="infiniteHandler"></infinite-loading>
          <notifications group="foo" />
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
    mounted(){
        EventBus.$on('delete-product',this.removeProduct)
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
        },
        removeProduct(index){
            this.products.splice(index,1);
        }
    }
};
</script>
