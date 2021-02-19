<template>
    <div v-if="localProduct" class="card border-0 shadow-sm mb-2">
        <div class="card-body">
            <h3 class="card-text text-center">{{ localProduct.title }}</h3>
        </div>
        <ul class="list-group">
            <!-- <li class="list-group-item">
                <p class="card-text">
                    <strong>Género:</strong> {{ localProduct.musical_genre.toUpperCase() }}
                </p>
            </li> -->
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
                <controls-audio :product="localProduct"></controls-audio>
            </li>
            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    <div
                        class="btn-group btn-group-lg text-center"
                        role="group"
                        aria-label="Basic example"
                    >
                        <a
                            :href="`/products/${localProduct.id}/edit`"
                            class="btn btn-primary"
                        >
                            <svg
                                width="1.5em"
                                height="1.5em"
                                viewBox="0 0 16 16"
                                class="bi bi-pen"
                                fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"
                                />
                            </svg>
                        </a>
                        <delete-button
                            :product="localProduct"
                            :index="index"
                        ></delete-button>
                    </div>
                </div>
            </div>
        </ul>
    </div>
</template>
<script>
export default {
    props: {
        product: {
            type: Object
        },
        index: {
            type: Number
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
