<template>
    <div class="container">
        <!-- add product from -->
        <add-to-product @completed="addStatus"></add-to-product><br>
        <div class="row">
            <div v-for="(product, index) in products" class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <router-link :to="{name: 'ProductShow', params: {id:product.id}}">
                            {{product.title}}
                        </router-link>
                    </div>
                    <div class="card-body">
                        {{product.description}}
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger" @click="onDelete(product.id, index)">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import AddToProduct from '../from/AddToProduct';
    import Status from '../utilities/Status';
    export default {

        components: {
            AddToProduct
        },

        data() {
            return {
                products: []
            }
        },

        created() {
           Status.all(products => this.products = products);
        },

        methods: {

            addStatus(status) {
                this.products.unshift(status)
            },

            onDelete(id, index) {
                if(confirm('Are you sure you wann delete ?')) {

                    axios.delete(`api/products/${id}`)
                    this.products.splice(index, 1)

                }


            }
        }
    }
</script>
