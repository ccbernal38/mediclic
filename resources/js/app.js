/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-home-component', require('./components/HeaderComponent.vue').default);
Vue.component('footer-color-component', require('./components/FooterColoresComponent.vue').default);

//-----------------Producto-----------------
Vue.component('producto-registro-component', require('./components/producto/ProductoRegistroComponent.vue').default);
Vue.component('producto-index-component', require('./components/producto/ProductoIndexComponent.vue').default);
//------------------------------------------

//---------------laboratorio----------------
Vue.component('laboratorio-registro-component', require('./components/laboratorio/LaboratorioRegistroComponent.vue').default);
Vue.component('laboratorio-index-component', require('./components/laboratorio/LaboratorioIndexComponent.vue').default);
//------------------------------------------

//---------------Usuarios----------------
Vue.component('paciente-registro-component', require('./components/usuarios/PacienteRegistroComponent.vue').default);
//------------------------------------------

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    mounted(){

    }
});
