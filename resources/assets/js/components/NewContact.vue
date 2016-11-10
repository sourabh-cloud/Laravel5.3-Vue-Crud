<template>
<div>
    <div v-if="message" v-bind:class="{ alert: true, 'alert-danger': err, 'alert-info': !err }">
        {{message}}
    </div>
    <div class="form-group">
        <label>Name</label>
        <input v-model="model.name" placeholder="" class="form-control">
        <span v-if="errors.name" class="errors">
                {{errors.name[0]}}
            </span>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input v-model="model.email" placeholder="" class="form-control">
        <span v-if="errors.email" class="errors">
                {{errors.email[0]}}
            </span>
    </div>
    <button class="btn btn-sm btn-info" v-on:click="saveRecord">Save</button>
</div>
</template>
<script>
export default {
    mounted() {},
    computed: {
        err: function() {
            return this.status !="success";
        }
    },
    data() {
        return {
            model: {
                name: "",
                email: ""
            },
            errors: {},
            message: null,
            status: "fail"

        }
    },
    methods: {
        saveRecord: function(event) {
            console.log("A");
            let headers = new Headers({
                'Content-Type': 'application/json'
            });
            this.$http.post('index.php/contacts', JSON.stringify(this.model), {
                headers: this.headers
            }).then((response) => {
                console.log(JSON.stringify(response));
                this.errors = response.data.errors;
                this.message = response.data.message;
                this.status = response.data.status;

            }, (response) => {
                console.log(JSON.stringify(response));
            });
        }
    }
}
</script>
