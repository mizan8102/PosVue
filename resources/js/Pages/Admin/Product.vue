<template>
    <app-layout title="Products">
        <div class="container-fluid">
            <div class="block-header">
                <h1>Products</h1>
            </div>

            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" ><a href="#product" aria-controls="home" role="tab" data-toggle="tab"><i class="material-icons">add_circle_outline</i>Add product</a></li>
                                    <li role="presentation" class="active"><a href="#manage_product" v-on:click="refreshComponent" aria-controls="settings" role="tab" data-toggle="tab"><i class="material-icons">beenhere</i> Manage products</a></li>
                                    <li role="presentation"><a href="#catagory" aria-controls="settings" role="tab" data-toggle="tab"><i class="material-icons">local_offer</i>Catagory</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in" id="product">
                                       <product_info/>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in active" id="manage_product">
                                     <manage/>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="catagory">
                                        <catagory/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import product_info from '@/Pages/Admin/product/Product_info.vue'

    import manage from '@/Pages/Admin/product/manage_product.vue'
     import catagory from '@/Pages/Admin/product/Catagory.vue'
    export default defineComponent({
        components: {
            AppLayout,
            product_info,
            manage,
            catagory,
        },
        data() {
                return {
            
                }
                },
                methods: {
                    
                },
                

    })
</script>

