<template>
    <div>
        <div class="alert alert-danger" role="alert">
            
        </div>
        <div class="card border-0 shadow-sm">
            <div class="card-body">
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
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Letra</label>
                        <textarea
                            class="form-control border-0"
                            name="lyrics"
                            v-model="product.lyrics"
                            placeholder="Letra de la canción..."
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
                        />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary">Guardar</button>
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
            fileSelected:null,
            errors:null
        };
    },
    props: {
        url: {
            type: String,
        },
        method: {
            type: String,
        },
    },
    methods: {
        // Crear producto, se envia al backend  productController->store()
        submit() {
            let fd = new FormData(document.getElementById('formProduct'));
            fd.append('file',this.fileSelected)
            axios
                .post(`/products/store`,fd)
                .then((res) => {
                    console.log(res);
                })
                .catch((err) => {
                    this.errors = err.response.data.errors;
                });
        },
        onFileSelected(event){
            this.fileSelected = event.target.files[0];
        }
    },
};
</script>
