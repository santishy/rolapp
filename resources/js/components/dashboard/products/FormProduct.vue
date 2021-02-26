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
                        <select
                            name="album_id"
                            class="form-control"
                            v-model="localProduct.album_id"
                        >
                            <option value="default" disabled
                                >Elige un album</option
                            >
                            <option
                                v-for="album in albums"
                                :key="album.id"
                                :value="album.id"
                                :selected="isSelected"
                                >{{
                                    album.name + " | " + album.musical_genre
                                }}</option
                            >
                        </select>
                    </div>
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
                            id="song"
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
    created() {
        if (!!this.product) {
            this.localProduct = this.product;
            this.localProduct.album_id = this.product.album_id;
        } else {
            this.localProduct.album_id = "default";
            this.localProduct.price=0;
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
        },
        albums: {
            type: Array
        }
    },
    methods: {
        // Crear producto, se envia al backend  productController->store()
        submit() {
            let fd = new FormData(document.getElementById("formProduct"));
            //if (!!this.fileSelected) fd.append("file", this.fileSelected);
            if (this.method == "put") fd.append("_method", "PUT");
            axios["post"](this.url, fd)
                .then(res => {
                    this.errors = null;
                   // this.localProduct = null;
                    this.fileSelected = null;
                  
                    if (this.method === "post") {
                        this.localProduct = res.data.data;
                        EventBus.$emit("product-created", this.localProduct);
                        document.getElementById("song").value = "";
                        this.localProduct = {price:0}
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
        },
        isSelected() {
            var selected = "";
            for (let i = 0; this.albums < i; i++) {
                if (this.localProduct.album_id === this.albums[i].id)
                    selected = "selected";
            }
            return selected;
        }
    }
};
</script>
