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
                        <button class="btn btn-primary" @click="onModal(product.id, product.title, product.description, index)">Edit</button>
                        <button class="btn btn-danger" @click="onDelete(product.id, index)">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <edit-product>

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

            onModal: function (val_id, val_title, val_description, index) {


                $('#myModal').modal('show')




                // console.log(val_title)
                // this.id = val_id;
                // this.title = val_title;
                // this.description = val_description;
            }
        }
    }
</script>
