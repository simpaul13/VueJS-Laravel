<template>
    <div class="container">
        <div class="row">
            <div v-for="product in products" class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <router-link :to="{name: 'ProductShow', params: {id:product.id}}">
                            {{product.title}}
                        </router-link>
                    </div>
                    <div class="card-body">
                        {{product.description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                products: []
            }
        },

        mounted() {
            axios.get('/api/products')
                .then(({data}) => this.products = data);
        }
    }
</script>
