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
                        <button class="btn btn-primary" @click="onModal(product.id, index)">Edit</button>
                        <button class="btn btn-danger" @click="onDelete(product.id, index)">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <edit-product>
            <div class="col-xs-12 form-group">
                <label class="control-label">Title</label>
                <input type="text" class="form-control">
            </div>
            <div class="col-xs-12 form-group">
                <label class="control-label">Description</label>
                <input type="text" class="form-control">
            </div>
        </edit-product>

    </div>
</template>

<script>
    import axios from 'axios';
    import AddToProduct from '../from/AddToProduct';
    import EditProduct from '../from/EditProduct';
    import Status from '../utilities/Status';

    export default {

        components: {
            AddToProduct,
            EditProduct
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
            },

            onModal(id, index) {
                console.log(id)
                $('#myModal').modal('show')

            }
        }
    }
</script>
