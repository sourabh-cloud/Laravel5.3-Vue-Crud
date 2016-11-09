<template>
    <div>
        <h3>
            Contact List , Showing {{current_page}} of {{last_page}}
            <div class="pull-right">
                <button class="btn btn-default" v-if="current_page > 1" v-on:click="movePre">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </button>
                &nbsp;
                <button class="btn btn-default" v-if="current_page != last_page"  v-on:click="moveNext">
                    <i class="glyphicon glyphicon-arrow-right"></i>
                </button>
                
            </div>
        </h3>
        <table class='table table-striped'>
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                </tr>
            </thead>
            <tr v-for="model in list">
                <td>{{ model.id }}</td>
                <td>{{ model.name }}</td>
                <td>{{ model.email }}</td>     
            </tr>
        </table>
        <!--
        <button class="btn btn-sm btn-info" v-on:click="fetchRecords">Click</button>
        -->
    </div>
</template>

<script>
    export default {
    mounted() {
    console.log('Component ready.');
    this.fetchRecords();
    },
            data(){
    return{
    list:[{name:"A"}],
            current_page:1,
            per_page:0,
            last_page:0
    }
    },
            methods: {
            fetchRecords: function (event) {
            this.$http.get('contacts?page='+this.current_page).then((response) => {
            this.list = response.data.data;
            this.last_page=response.data.last_page;
           // console.log("E ------------>"+event);
            //console.log(JSON.stringify(this.list));
            }, (response) => {
            console.log(JSON.stringify(response));
            });
            },
             moveNext: function (event) {
                 this.current_page++;
                 this.fetchRecords();
             },
             movePre: function (event) {
                 this.current_page--;
                 this.fetchRecords();
             }
             
            }
    }
</script>
