<template>
    <div v-if="product" class="card border-0 shadow-sm mb-2">
        <ul class="list-group">
            <li class="list-group-item">
                <strong>Título:</strong> {{ product.title }}
            </li>
            <li class="list-group-item">
                <p class="card-text">
                    <strong>Descripcion:</strong> {{ product.description }}
                </p>
            </li>
            <li class="list-group-item">
                <p class="card-text">
                    <strong>Letra:</strong> {{ product.lyrics }}
                </p>
            </li>
            <li class="list-group-item">
                <strong>Precio:</strong> {{ product.formatted_price }}
            </li>
            <li
                class="list-group-item d-flex align-items-center justify-content-between"
            >
                <strong>Audio:</strong>
                <controls-audio :file_uri="product.file_uri"></controls-audio>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    data(){
        return {
            product:null,
        }
    },
    created(){
        EventBus.$on('product-created',this.setProduct)
    },
    methods:{
        setProduct(product){
            this.product = product;
        }
    }
};
</script>
