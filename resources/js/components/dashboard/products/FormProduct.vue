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
                    
                        <input
                            type="text"
                            placeholder="Escribe el título"
                            class="form-control border-0"
                            name="title"
                            v-model="localProduct.title"
                            required
                        />
                    </div>
                    <div class="form-group">
                        
                        <textarea
                            class="form-control border-0"
                            placeholder="Descripción..."
                            v-model="localProduct.description"
                            name="description"
                            required
                        ></textarea>
                    </div>
                    <div class="form-group">
                      
                        <textarea
                            class="form-control border-0"
                            name="lyrics"
                            v-model="localProduct.lyrics"
                            rows="5"
                            placeholder="Letra de la canción... (Dato opcional)"
                        ></textarea>
                    </div>
                    <div class="form-group">
                       
                        <input
                            type="number"
                            class="form-control border-0"
                            name="price"
                            v-model="localProduct.price"
                            placeholder="Precio de la canción..."
                            required
                        />
                    </div>
                    <div class="form-group">
                        <controls-audio
                            v-if="localProduct.file_uri"
                            :product="localProduct"
                        ></controls-audio>
                        <label>Cargar canción</label>
                        <input
                            type="file"
                            class="form-control border-0"
                            name="file"
                            @change="onFileSelected"
                            placeholder="Archivo..."
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
        <notifications group="foo" />
    </div>
</template>

<script>
export default {
    data() {
        return {
            localProduct: {},
            fileSelected: null,
            errors: null
        };
    },
    mounted() {
        if (!!this.product) {
            this.localProduct = this.product;
        }
    },
    props: {
        url: {
            type: String
        },
        method: {
            type: String,
            required: true
        },
        product: {
            type: Object
        }
    },
    methods: {
        // Crear producto, se envia al backend  productController->store()
        submit() {
            let fd = new FormData(document.getElementById("formProduct"));
            if (!!this.fileSelected) fd.append("file", this.fileSelected);
            if (this.method == "put") fd.append("_method", "PUT");
            axios["post"](this.url, fd)
                .then(res => {
                    this.errors = null;
                    this.localProduct = null;
                    this.fileSelected = null;
                    this.localProduct = res.data.data;
                    if (this.method === "post") {
                        EventBus.$emit("product-created", this.localProduct);
                        this.notification(
                            "Se creo correctamente",
                            "success",
                            "Productos"
                        );
                    } else {
                        this.notification(
                            "Actualizado correctamente",
                            "primary",
                            "Productos"
                        );
                    }
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
            if (this.method == "post") {
                return "Crear Producto";
            }
            return "Modificar producto";
        }
    }
};
</script>
