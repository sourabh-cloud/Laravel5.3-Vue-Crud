<template>
    <div>
        <div class="form-group">
            <label>Name</label>
            <input v-model="model.name" placeholder="" class="form-control">
        </div>
      <div class="form-group">
            <label>Email</label>
            <input v-model="model.email" placeholder="" class="form-control">
        </div>
      
        
        <button class="btn btn-sm btn-info" v-on:click="saveRecord">Save</button>
        
    </div>
</template>

<script>
    export default {
    mounted() {
    
    
    },
            data(){
    return{
    model:{name:"A",email:""}
    }
    },
            methods: {
            saveRecord: function (event) {
//            this.$http.get('contacts').then((response) => {
//            this.list = response.data.data;
//            console.log(JSON.stringify(this.list));
//            
//            }, (response) => {
//            console.log(JSON.stringify(response));
//            });
            }
            }
    }
</script>
