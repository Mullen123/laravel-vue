/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
/*importamos vue router*/
 import VueRouter from 'vue-router';
 Vue.use(VueRouter);
/*importamos los componentes*/
import App from './components/App.vue';
import Dashboard from './components/modulos/dashboard/Dashboard';
import Clientes from './components/modulos/clientes/Clientes';
import Pedidos from './components/modulos/pedidos/Pedidos';
import Productos from './components/modulos/productos/Productos';
import Reportes from './components/modulos/reportes/Reportes';
import Usuarios from './components/modulos/usuarios/Usuarios';
import Roles from './components/modulos/usuarios/Roles';
import Permisos from './components/modulos/usuarios/Permisos';
import Categorias from './components/modulos/categorias/Categorias';




Vue.component('app-component',App);


const router = new VueRouter({
    routes: [
        {
            path : '/',
            component :Dashboard,
        },
        {
            path : '/clientes',
                component :Clientes,
        },

        {
            path : '/pedidos',
            component :Pedidos,
        },

        {
            path : '/productos',
            component :Productos,
        },

        {
            path : '/reportes',
            component :Reportes,
        },

        {
            path : '/usuarios',
            component :Usuarios,
        },
        {
            path : '/roles',
            component :Roles,
        },
        {
            path : '/permisos',
            component :Permisos,
        },
        {
            path : '/categorias',
            component :Categorias,
        },



        
    ],
    /*para que se cambie entre urls*/
    mode:'history'
    });
    



const app = new Vue({
    el: '#app',
    router : router,

    components:{
        App,
    },

});
