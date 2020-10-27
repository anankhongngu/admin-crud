require('./bootstrap');
window.Vue = require('vue');

// Support vuex
import Vuex from 'vuex'
Vue.use(Vuex)
import storeData from "./store/index"
const store = new Vuex.Store(
    storeData
)

//moment js
import {filter} from './filter'

//vue router
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import {routes} from './routes.js';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-home', require('./components/admin/AdminHome.vue').default);
Vue.component('admin-main', require('./components/admin/AdminMaster.vue').default);
// Vue.component('search-cate', require('./components/admin/category/Search.vue').default);

// ~~~~~~~~~~~~~~~~~~~~~~

const router = new VueRouter({
    routes,
    mode: 'hash'
})

const app = new Vue({
    el: '#app',
    router,
    store
});

// v-form
import { Form, HasError, AlertError } from 'vform'

window.Form = Form;  
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
// ~~~~~
// Sweet alert2
window.Swal = Swal;
import Swal from 'sweetalert2'
const Toast = Swal.mixin({
	toast: true,
	position: 'top-end',
	showConfirmButton: false,
	timer: 3000,
	timerProgressBar: true,
	onOpen: (toast) => {
		toast.addEventListener('mouseenter', Swal.stopTimer)
		toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})


window.Toast = Toast;
