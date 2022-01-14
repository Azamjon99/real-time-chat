<template>

<show-question
:data = question
>
</show-question>
</template>
<script>
import ShowQuestion from './ShowQuestion'
export default {
    components:{ShowQuestion},
    data(){
        return {
            question:{}
        }
    },
    created(){
    axios.get(`/api/question/${this.$route.param.slug}` )
    .then(res => console.log(res.data.data)
)
    .catch(error => error.response.data)
    }
}
</script>
