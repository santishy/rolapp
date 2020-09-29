<template>
    
</template>
<script>
export default {
    data(){
        return{

        }
    },
    mounted(){
        axios.get('/products')
            .then( res => {
                this.products = res.data.data;
            })
            .catch( err => {
                console.log(err.response.data)
            })
    }
}
</script>