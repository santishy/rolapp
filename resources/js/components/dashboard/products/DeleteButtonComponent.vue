<template>
    <a href="#" @click.prevent="destroy" class="btn btn-danger">
        <svg
            width="1.5em"
            height="1.5em"
            viewBox="0 0 16 16"
            class="bi bi-x-circle"
            fill="currentColor"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path
                fill-rule="evenodd"
                d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
            />
            <path
                fill-rule="evenodd"
                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
            />
        </svg>
    </a>
</template>
<script>
export default {
    props: {
        product: {
            type: Object,
            required: true
        },
        index: {
            type: Number
        }
    },
    methods: {
        destroy() {
            axios({
                method: "delete",
                url: `/products/${this.product.id}`
            })
                .then(res => {
                    EventBus.$emit("delete-product", this.index);
                    this.notification(
                        "Se a eliminado correctamente",
                        "error",
                        "Productos"
                    );
                })
                .catch(err => {
                    console.log(err.response.data);
                });
        }
    }
};
</script>
