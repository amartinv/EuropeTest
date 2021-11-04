require('./bootstrap');

import Vue from 'vue';

// Vue router import
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// Components
import WelcomeComponent from './components/WelcomeComponent.vue';
import Example from './components/Example.vue';
import FormComponent from './components/FormComponent.vue';

const routes = [
    { name: 'WelcomeComponent', path: '/welcome', component: WelcomeComponent},
    { name: 'Example', path: '/example', component: Example},
    { name: 'FormComponent', path: '/form', component: FormComponent},
]

const router = new VueRouter({
    routes: routes,
    mode: "hash"
})

Vue.component('example', require('./components/Example.vue'));
Vue.component('welcome', require('./components/WelcomeComponent.vue'));
Vue.component('form', require('./components/FormComponent.vue'));

const app = new Vue({
    router
  }).$mount('#app')
