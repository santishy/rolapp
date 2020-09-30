<template>
    <div v-if="localProduct" class="card border-0 shadow-sm mb-2">
        <div class="card-body">
            <div class="d-flex justify-content-center">
                <div
                    class="btn-group btn-group-lg text-center mb-4"
                    role="group"
                    aria-label="Basic example"
                >
                    <a
                        :href="`/products/${localProduct.id}/edit`"
                        class="btn btn-primary"
                        >Actualizar</a
                    >
                    <a
                        :href="`/products/destroy/${localProduct.id}`"
                        class="btn btn-danger"
                        >Eliminar</a
                    >
                </div>
            </div>
            <h3 class="card-text text-center">{{ localProduct.title }}</h3>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <p class="card-text">
                    <strong>Descripcion:</strong> {{ localProduct.description }}
                </p>
            </li>
            <li class="list-group-item">
                <p class="card-text">
                    <strong>Letra:</strong> {{ localProduct.lyrics }}
                </p>
            </li>
            <li class="list-group-item">
                <strong>Precio:</strong> {{ localProduct.formatted_price }}
            </li>
            <li
                class="list-group-item d-flex align-items-center justify-content-between"
            >
                <strong>Audio:</strong>
                <controls-audio
                    :file_uri="localProduct.file_uri"
                ></controls-audio>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    props: {
        product: {
            type: Object
        }
    },
    mounted() {
        if (!!this.product) {
            this.localProduct = this.product;
        }
    },
    data() {
        return {
            localProduct: null
        };
    },
    created() {
        EventBus.$on("product-created", this.setlocalProduct);
    },
    methods: {
        setlocalProduct(product) {
            this.localProduct = product;
        }
    }
};
</script>
