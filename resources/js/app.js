require('./bootstrap');

window.Vue = require('vue');



Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('users', require('./components/Users.vue'));


const app = new Vue({
    el: '#app'
});
