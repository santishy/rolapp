<template>
    <form @submit.prevent="submit" class="p-4 rounded shadow border-0 bg-white">
        <h3>Crear album</h3>
        <div v-if="errors" class="alert alert-danger" role="alert">
            <ul class="py-0 my-0">
                <li v-for="(value, key, index) in errors" :key="index">
                    {{ value }}
                </li>
            </ul>
        </div>
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" v-model="form.name" />
        </div>
        <div class="form-group">
            <label for="video">Genero musical</label>
            <input
                name="musical_genre"
                id="musical_genre"
                class="form-control"
                v-model="form.musical_genre"
            />
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block">Guardar</button>
        </div>
    </form>
</template>
<script>
export default {
    data() {
        return {
            form: {},
            errors: null
        };
    },
    methods: {
        submit() {
            axios
                .post("/albums", this.form)
                .then(res => {
                    EventBus.$emit("album-saved", res.data);
                    this.form={}
                })
                .catch(err => {
                    this.errors = Object.values(
                        err.response.data.errors
                    ).flat();
                });
        }
    }
};
</script>