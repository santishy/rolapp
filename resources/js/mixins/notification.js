export default{
    methods:{
        notification(message,type,title){
            this.$notify({
                group: "foo",
                title: title,
                text: message,
                type:type
            });
        }
    }
}