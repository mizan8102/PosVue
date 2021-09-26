<template>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <form id="myForm" @submit.prevent="addPurchase">      
<tr v-for="(invoice_product, k) in invoice_products" :key="k">
    <td scope="row" class="trashIconContainer">
        <button>
                <i class="material-icons" @click="deleteRow(k, invoice_product)">remove_circle_outline</i>
        </button>
    
    </td>
    <td>
        <input class="form-control" name="product[]" type="text" v-model="invoice_product.product_no" />
    </td>
    <td>
        <input class="form-control" name="pro[]" type="text" v-model="invoice_product.product_name" />
    </td>
    <td>
        <input class="form-control text-right" type="number" min="0" step=".01" v-model="invoice_product.product_price" @change="calculateLineTotal(invoice_product)"
        />
    </td>
    <td>
        <input class="form-control text-right" type="number" min="0" step=".01" v-model="invoice_product.product_qty" @change="calculateLineTotal(invoice_product)"
        />
    </td>
    <td>
        <input readonly class="form-control text-right" type="number" min="0" step=".01" v-model="invoice_product.line_total" />
    </td>
</tr>
<button type='button' class="btn btn-info" @click="addNewRow">
    <i class="fas fa-plus-circle"></i>
    Add
</button>
                    <button type="submit" class="btn btn-primary">Save</button> 
              </form>
                </div>
                                   
                                            
    </div>
</template>

<script>
    import axios from "axios";
export default {
    data(){
       return {
            invoice_products: [{
                product_no: '',
                product_name: '',
                product_price: '',
                product_qty: '',
                line_total: 0
            }]
       }
    },
    methods:{

       async addPurchase(){
            var formData = new FormData(document.getElementById("myForm"))
            const res = await axios.post("/api/purchases",formData)
            .then(function (response) {
                // Toast.fire({
                //     icon: 'success',
                //     title: response.data
                //     }) 
                    //   document.getElementById("myForm").reset();
                    console.log(response.data);
                    })
                    .catch(function (error) {
                            Toast.fire({
                    icon: 'error',
                    title: response.data
                    }) 
                    });

               
        },
            saveInvoice() {
            console.log(JSON.stringify(this.invoice_products));
        },
        calculateTotal() {
            var subtotal, total;
            subtotal = this.invoice_products.reduce(function (sum, product) {
                var lineTotal = parseFloat(product.line_total);
                if (!isNaN(lineTotal)) {
                    return sum + lineTotal;
                }
            }, 0);

            this.invoice_subtotal = subtotal.toFixed(2);

            total = (subtotal * (this.invoice_tax / 100)) + subtotal;
            total = parseFloat(total);
            if (!isNaN(total)) {
                this.invoice_total = total.toFixed(2);
            } else {
                this.invoice_total = '0.00'
            }
        },
        calculateLineTotal(invoice_product) {
            var total = parseFloat(invoice_product.product_price) * parseFloat(invoice_product.product_qty);
            if (!isNaN(total)) {
                invoice_product.line_total = total.toFixed(2);
            }
            this.calculateTotal();
        },
        deleteRow(index, invoice_product) {
            var idx = this.invoice_products.indexOf(invoice_product);
            console.log(idx, index);
            if (idx > -1) {
                this.invoice_products.splice(idx, 1);
            }
            this.calculateTotal();
        },
        addNewRow() {
            this.invoice_products.push({
                product_no: '',
                product_name: '',
                product_price: '',
                product_qty: '',
                line_total: 0
            });
        }
    }
};
</script>