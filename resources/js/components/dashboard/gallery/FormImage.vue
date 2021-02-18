<template>
    <form class="p-4 bg-white rounded-sm shadow" @submit.prevent="submit">
        <div v-if="errors" class="alert alert-danger" role="alert">
            <ul class="py-0 my-0">
                <li v-for="(value, key, index) in errors" :key="index">
                    {{ value }}
                </li>
            </ul>
        </div>
        <div class="form-group">
            <label class="control-label" for="title">Título</label>
            <input
                id="title"
                class="form-control"
                type="text"
                v-model="title"
            />
        </div>
        <div class="form-group">
            <label class="control-label" for="title">Imagen</label>
            <input
                id="title"
                @change="onFileSelected"
                class="form-control"
                type="file"
            />
        </div>
        <div v-if="upload" class="progress mt-2 mb-2">
            <div
                class="progress-bar progress-bar-striped progress-bar-animated"
                role="progressbar"
                :aria-valuenow="load"
                aria-valuemin="0"
                aria-valuemax="100"
                :style="{ width: load + '%' }"
            ></div>
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
            fileSelected: null,
            title: "",
            upload: false,
            load: 0,
            errors:null
        };
    },
    methods: {
        onFileSelected(event) {
            this.fileSelected = event.target.files[0];
        },
        submit() {
            this.upload = true;
            let fd = new FormData();
            fd.append("image", this.fileSelected);
            fd.append("title", this.title);
            axios({
                method: "post",
                url: "/gallery",
                data: fd,
                onUploadProgress: uploadEvent => {
                    this.load =
                        Math.round(uploadEvent.loaded / uploadEvent.total) *
                        100;
                }
            })
                .then(res => {
                    EventBus.$emit('saved-image',res.data.data);
                    this.upload = false;
                })
                .catch(err => {
                    this.errors = Object.values(
                        err.response.data.errors
                    ).flat();
                    this.upload = false;
                });
            //
        }
    }
};
</script>
