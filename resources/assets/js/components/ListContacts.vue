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
                <th>
                    <a href='#' v-on:click="doSort('id')">
                        <i class='glyphicon glyphicon-sort' v-if="field =='id'"></i> Id
                    </a>
                </th>
                <th>
                    <a href='#' v-on:click="doSort('name')">
                        <i class='glyphicon glyphicon-sort' v-if="field =='name'"></i> Name
                    </a>
                </th>
                <th>
                    <a href='#' v-on:click="doSort('email')">
                        <i class='glyphicon glyphicon-sort' v-if="field =='email'"></i> Email
                    </a>
                </th>
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
    data() {
        return {
            list: [{
                name: "A"
            }],
            current_page: 1,
            per_page: 0,
            last_page: 0,
            sort: "desc",
            field: "id"
        }
    },
    methods: {
        doSort: function(event) {
            console.log(event);
            this.current_page = 1;
            if (this.field != event) {
                this.sort = "asc";
            } else {
                this.sort = this.sort == "asc" ? "desc" : "asc";
            }
            this.field = event;
            this.fetchRecords();
        },
        fetchRecords: function(event) {
            this.$http.get('contacts?page=' + this.current_page + '&sort=' + this.sort + '&field=' + this.field).then((response) => {
                this.list = response.data.data;
                this.last_page = response.data.last_page;
                // console.log("E ------------>"+event);
                //console.log(JSON.stringify(this.list));
            }, (response) => {
                console.log(JSON.stringify(response));
            });
        },
        moveNext: function(event) {
            this.current_page++;
            this.fetchRecords();
        },
        movePre: function(event) {
            this.current_page--;
            this.fetchRecords();
        }

    }
}
</script>
