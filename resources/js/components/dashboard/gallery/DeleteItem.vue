<template>
    <button class="btn btn-danger btn-sm" @click.prevent="destroy">
        X
    </button>
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
            axios.delete(`/gallery/${this.id}`)
                .then((res)=> {
                    if(res.data){
                        EventBus.$emit('item-removed',this.index);
                    }
                })
        }
    }
}
</script>