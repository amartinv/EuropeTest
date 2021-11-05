require('./bootstrap');

import Vue from 'vue';

// Vue router import
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Components
import HomeComponent from './components/HomeComponent.vue';
import FormComponent from './components/FormComponent.vue';
import DogsIndexComponent from './components/DogsIndexComponent.vue';
import EditComponent from './components/EditComponent.vue';

const routes = [
    { name: 'HomeComponent', path: '/', component: HomeComponent},
    { name: 'FormComponent', path: '/form', component: FormComponent},
    { name: 'DogsIndexComponent', path: '/dogs', component: DogsIndexComponent},
    { name: 'EditComponent', path: '/dogs/:id/edit', component: EditComponent},
]

const router = new VueRouter({
    routes: routes,
    mode: "hash"
})

Vue.component('HomeComponent', require('./components/HomeComponent.vue'));
Vue.component('form', require('./components/FormComponent.vue'));
Vue.component('DogsIndexComponent', require('./components/DogsIndexComponent.vue'));
Vue.component('EditComponent', require('./components/EditComponent.vue'));

const app = new Vue({
    router
  }).$mount('#app')
