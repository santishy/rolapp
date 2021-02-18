<template>
    <button class="btn btn-danger btn-sm" @click.prevent="destroy">X</button>
</template>
<script>
export default {
    props:{
        id:{
            type:Number
        },
        index:{
            type:Number
        }
    },
    methods:{
        destroy(){
            axios.delete(`/videos/${this.id}`)
                .then((res)=> {
                    if(res.data){
                        EventBus.$emit('video-removed',this.index);
                    }
                })
                .catch( err => {
                    console.log(err);
                })
        }
    }
}
</script>