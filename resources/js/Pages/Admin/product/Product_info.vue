<template>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="demo-masked-input">
                <div class="row clearfix">
                    <form id="productform" @submit.prevent="addProduct" enctype="multipart/form-data">
                    <div class="col-md-4">
                        <label for="email_address">Product Name:</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input
                                required
                                    type="text"
                                    id="pname"
                                    name="pname"
                                    class="form-control"
                                    placeholder="product name"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="email_address">Catagory:</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control show-tick" id="pcat" name="pcat" required>
                                    <option value="">
                                        -- Please select --
                                    </option>
                                    <option v-for="catagory in catagories" :key="catagory.id"  v-bind:value="catagory.id">{{ catagory.catagory}}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="email_address">Description:</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input
                                    type="text"
                                    id="decription"
                                    name="decription"
                                    class="form-control"
                                    placeholder="description"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <b>Product Picture</b>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">perm_media</i>
                            </span>
                            <div class="form-line">
                              <input type="file" id="image" name="image" required @change="onFileChange" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group">
                            <div id="preview" >
                                <img v-if="url" :src="url" id="pic" style="width:300px; heigth:auto;" />
                            </div>
                        </div>
                    </div>
                                  <div class="col-md-4">
                     
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">save</button>
                   
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";
export default {
    components: {},
    data() {
        return {
              catagories: [],
            url: null,
            file:null,
             headers: {
                        'content-type': 'multipart/form-data'
                    }
        };
    },
    created(){
            this.getCatagory();
    },
    methods: {
        onFileChange(e) {
            this.file = e.target.files[0];
            this.url = URL.createObjectURL(this.file);
        },
   async addProduct(){
                  var formData = new FormData(document.getElementById("productform"))
                  formData.append('myFile', this.file)
            const res = await axios.post("/api/products",formData,this.headers)
            .then(function (response) {
                Toast.fire({
                    icon: 'success',
                    title: response.data
                    }) 
                      document.getElementById("productform").reset();
                      this.url=null;
                      this.file=null;

                    })
                    .catch(function (error) {
                            Toast.fire({
                    icon: 'error',
                    title: response.data
                    }) 
                    });

        },


            getCatagory() {
            axios
                .get("/api/catagory")
                .then((res) => {
                    this.catagories = res.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
};
</script>
