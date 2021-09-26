<template>
    <div>
        <form class="form-horizontal" @submit.prevent="addCatagory" id="myForm">
            <div class="form-group">
                <label for="OldPassword" class="col-sm-3 control-label"
                    >Product Catagory:</label
                >
                <div class="col-sm-9">
                    <div class="form-line">
                        <input
                            type="text"
                            class="form-control"
                            id="catagory"
                            v-model="catagories.catagory"
                            name="catagory"
                            placeholder="catagory"
                           
                        />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" :disabled="catagories.busy"  class="btn btn-danger">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>

    <div class="body table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Catagory Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(catagory,index) in catagories" :key="catagory.id">
                    <th scope="row">{{ ++index }}</th>
                    <td>{{ catagory.catagory }}</td>
                    <td>
                        <a href="" class="btn btn-info">edit</a>
                    </td>
                </tr>
               
               
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            catagories: [],
            catagories: {
                catagory: " ",
                busy:false,
            },
        };
    },
    created() {
        this.getCatagory();
    },
    methods: {
        async addCatagory() {
              var formData = new FormData(document.getElementById("myForm"))
            const res = await axios.post("/api/catagory",formData)
            .then(function (response) {
                Toast.fire({
                    icon: 'success',
                    title: response.data
                    }) 
                      document.getElementById("myForm").reset();
                    })
                    .catch(function (error) {
                            Toast.fire({
                    icon: 'error',
                    title: response.data
                    }) 
                    });

                     this.getCatagory();
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
<style>
 .swal2-popup {
  font-size: 1.6rem !important;
  font-family: Georgia, serif;
 }
</style>