<template>
    <div class="container">
        <div class="card">
            <div class="card-header">{{product.title}}</div>
            <div class="card-body">{{product.description}}</div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                product: null
            }
        },

       created() {
            axios
                .get(`/api/products/${this.$route.params.id}`)
                .then(({data}) => (this.product = data))
       }
    }
</script>
