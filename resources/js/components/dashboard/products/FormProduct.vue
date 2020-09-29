<template>
    <div>
        <div v-if="errors" class="alert alert-danger" role="alert">
            <ul class="py-0 my-0">
                <li v-for="(value, key, index) in errors" :key="index">
                    {{ value }}
                </li>
            </ul>
        </div>
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h5 class="card-title text-center">{{ getTitle }}</h5>
                <form id="formProduct" @submit.prevent="submit">
                    <div class="form-group">
                        <label for="">Título</label>
                        <input
                            type="text"
                            placeholder="Escribe el título"
                            class="form-control border-0"
                            name="title"
                            v-model="product.title"
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <textarea
                            class="form-control border-0"
                            placeholder="Descripción..."
                            v-model="product.description"
                            name="description"
                            required
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Letra</label>
                        <textarea
                            class="form-control border-0"
                            name="lyrics"
                            v-model="product.lyrics"
                            rows="5"
                            placeholder="Letra de la canción... (Dato opcional)"
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input
                            type="number"
                            class="form-control border-0"
                            name="price"
                            v-model="product.price"
                            placeholder="Precio de la canción..."
                            required
                        />
                    </div>
                    <div class="form-group">
                        <label>Cargar archivo</label>
                        <input
                            type="file"
                            class="form-control border-0"
                            name="file"
                            @change="onFileSelected"
                            placeholder="Archivo..."
                            required
                        />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            product: {},
            fileSelected: null,
            errors: null,
        };
    },
    props: {
        url: {
            type: String
        },
        method: {
            type: String,
            required: true
        }
    },
    methods: {
        // Crear producto, se envia al backend  productController->store()
        submit() {
            let fd = new FormData(document.getElementById("formProduct"));
            fd.append("file", this.fileSelected);
            axios
                .post(`/products/store`, fd)
                .then(res => {
                    this.errors = null;
                    this.product = null;
                    this.fileSelected=null,
                    this.product = res.data.data;
                    EventBus.$emit('product-created',this.product);
                })
                .catch(err => {
                    this.errors = Object.values(
                        err.response.data.errors
                    ).flat();
                });
        },
        onFileSelected(event) {
            this.fileSelected = event.target.files[0];
        }
    },
    computed: {
        getTitle() {
            if (this.method == "POST") {
                return "Crear Producto";
            }
            return "Modificar producto";
        }
    }
};
</script>
