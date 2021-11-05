require('./bootstrap');

import Vue from 'vue';

// Vue router import
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Components
import Example from './components/Example.vue';
import FormComponent from './components/FormComponent.vue';

const routes = [
    { name: 'Example', path: '/example', component: Example},
    { name: 'FormComponent', path: '/form', component: FormComponent},
]

const router = new VueRouter({
    routes: routes,
    mode: "hash"
})

Vue.component('example', require('./components/Example.vue'));
Vue.component('form', require('./components/FormComponent.vue'));

const app = new Vue({
    router
  }).$mount('#app')
