<template>
    <form @submit.prevent="submit" class="p-4 rounded shadow border-0 bg-white">
        <h3>Crear enlace</h3>
        <div v-if="errors" class="alert alert-danger" role="alert">
            <ul class="py-0 my-0">
                <li v-for="(value, key, index) in errors" :key="index">
                    {{ value }}
                </li>
            </ul>
        </div>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" v-model="form.title" />
        </div>
        <div class="form-group">
            <label for="video">Codigo de el video</label>
            <textarea
                name="video"
                id="video"
                class="form-control"
                v-model="form.video"
            ></textarea>
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
                .post("/videos", this.form)
                .then(res => {
                    EventBus.$emit("video-saved", res.data);
                })
                .catch(err => {
                    this.errors = Object.values(
                        err.response.data.errors
                    ).flat();
                    this.upload = false;
                });
        }
    }
};
</script>
