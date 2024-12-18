require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue';
Vue.component('product-from', require('./components/ExampleComponent.vue').default);
// import ExampleComponent from './components/ExampleComponent.vue';

// const app = createApp({});
// app.component('test', ExampleComponent).default();
// app.mount('#app');

const app = new Vue({
    el: '#app',
    http: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    },
});