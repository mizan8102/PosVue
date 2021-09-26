<template>
<!-- <div id="pp">
  <div class="search-wrapper">
    <input type="text" v-model="search" placeholder="Search title.."/>
        <label>Search title:</label>
  </div>
  <div class="wrapper">
    <div class="card" v-for="post in postList" :key="post.id">
      <a v-bind:href="post.link" target="_blank">
        <img v-bind:src="post.image"/>
        <small>posted by: {{ post.pro_name }}</small>
        {{ post.cat_id }}
      </a>
    </div>
  </div>
</div> -->


            <div class="row clearfix">
                <li style="list-style-type: none; margin-left:8px;">
                                <a href="javascript:void(0);" class="btn btn-info"
                                    v-on:click="refreshComponent"
                                    > 
                                    <span v-show="!loading"> <i class="material-icons">loop</i></span>
                                    <!-- IF YOU ARE USING VUE BOOTSTRAP USE <b-spinner label="Loading..."></b-spinner> -->
                                    <div
                                        v-show="loading"
                                        class="spinner-border spinner-border-sm"
                                        role="status"
                                    >
                            <span class="sr-only">
                                    <div class="preloader pl-size-xs">
                                                        <div class="spinner-layer pl-white">
                                                            <div class="circle-clipper left">
                                                                <div class="circle"></div>
                                                            </div>
                                                            <div class="circle-clipper right">
                                                                <div class="circle"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                            </span>
                        </div>
                        </a>
                          <div class="wrap">
   <div class="search">
      <input type="text" v-model="search" class="searchTerm" placeholder="What are you looking for?">
      <button type="button" class="searchButton">
      <i class="material-icons">search</i>
     </button>
   </div>
</div>
                </li>
             
                <br>
                 <br>
             
                <div class="col-12 col-lg-4 col-md-4 col-sm-6 col-xs-12"  v-for="post in filteredList" :key="post.id">
                    <div class="card">
                        <div class="header">
                            <h2>
                               {{ post.pro_name }}<small>{{ post.details }}</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" @click="addToCount(post.id)"  class="dropdown-toggle" data-toggle="modal" data-target="#largeModal"  aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">create</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <img class="center-block" v-bind:src="post.image" style=" width:200px;height: 200px;align-text:center;"/>
                        </div>
                    </div>
                </div>

         <!--modal -->

              <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">    
                <form id="productform" @submit.prevent="addProduct" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">UPDATE PRODUCT INFORMATION</h4>
                        </div>
                        <div class="modal-body">
                     
                    <div class="col-md-4">
                        <label for="email_address">Product Name:</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input
                                required
                                    type="text"
                                    id="pname"
                                    name="pname"
                                    v-model="products.pro_name"
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
                                <select class="form-control show-tick"  id="pcat" name="pcat" required>
                                    <option value="">
                                        -- Please select --
                                    </option>
                                    <option v-for="catagory in catagories" :key="catagory.id" :selected= "catagory.id == products.cat_id"  v-bind:value="catagory.id">{{ catagory.catagory}}</option>
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
                                    v-model="products.details"
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
                                <img v-if="products.image" :src="products.image" id="pic" style="width:300px; heigth:auto;" />
                            </div>
                        </div>
                    </div>
                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>   
                     </form>
                </div>
            </div>
             <!-- end modal -->

            </div>



   
</template>

<script>
import axios from "axios";
export default {

    data(){
        return{
              catagories: [],
                products: [],
            postList: [],
            loading: false,
            search: '',

        }
    },
    created(){
        this.refreshComponent();
        this.getProduct();
        this.getCatagory();
    },
      computed:{
    filteredList() {
      return this.postList.filter(post => {
        return post.pro_name.toLowerCase().includes(this.search.toLowerCase())
      })
    }
  },
    methods:{
         getProduct() {
            axios
                .get("/api/products")
                .then((res) => {
                 this.postList = res.data;
                 this.loading = false;
          
                })
                .catch((err) => {
                    console.log(err);
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
        refreshComponent(){
                        // 
                          if (this.loading) return;
      this.loading = true;
      //USE SET TIME OUT TO SET DRAMATIC DELAY - NOT NEEDED
      setTimeout(() => {
            this.getProduct();
           
      }, 1000);
    
                    },

         addToCount(id){
                axios
                .get("/api/products/"+id)
                .then((res) => {
                    this.products=res.data;
                })
                .catch((err) => {
                    console.log(err);
                });
         }
    }
};
</script>
<style scoped>

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;

    height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  left: 50%;
  transform: translate(-50%, -50%);
  margin-bottom: 15px;
}
</style>
