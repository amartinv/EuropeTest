require('./bootstrap');

import Vue from 'vue';

// Vue router import
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Components
import Example from './components/Example.vue';
import FormComponent from './components/FormComponent.vue';
import DogsIndexComponent from './components/DogsIndexComponent.vue';

const routes = [
    { name: 'Example', path: '/example', component: Example},
    { name: 'FormComponent', path: '/form', component: FormComponent},
    { name: 'DogsIndexComponent', path: '/dogs', component: DogsIndexComponent},
]

const router = new VueRouter({
    routes: routes,
    mode: "hash"
})

Vue.component('example', require('./components/Example.vue'));
Vue.component('form', require('./components/FormComponent.vue'));
Vue.component('DogsIndexComponent', require('./components/DogsIndexComponent.vue'));

const app = new Vue({
    router
  }).$mount('#app')
