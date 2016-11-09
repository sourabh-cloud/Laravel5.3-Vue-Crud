
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
        /**
         * Next, we will create a fresh Vue application instance and attach it to
         * the page. Then, you may begin adding components to this application
         * or customize the JavaScript scaffolding to fit your unique needs.
         */

        var ListContacts = Vue.component('ListContacts', require('./components/ListContacts.vue'));
        var NewContact = Vue.component('NewContact', require('./components/NewContact.vue'));
        window.onload = function () {
        //#################################################
        const Bar = { template: '<div>bar</div>' }
        const routes = [
        { path: '/', component: ListContacts },
        { path: '/new-contact', component: NewContact }
        ];
                const router = new VueRouter({
                routes // short for routes: routes
                });
                const app = new Vue({
                router
                }).$mount('#app');
                //######################################################
        }
