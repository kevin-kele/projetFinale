/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import VueRouter from 'vue-router';
import { library } from '@fortawesome/fontawesome-svg-core'
import { faSignOutAlt } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faSignOutAlt)

Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.use(VueRouter)

import btc from './bitcoin'
import ether from './ether.vue'
import home from './cryptos.vue'
const routes = [
    {
        path: '/home',
        component:home
    },
    {
        path: '/btc',
        component:btc
    },
    {
        path: '/ether',
        component:ether
    },
    
]

const router = new VueRouter({routes})
const app = new Vue({
    el: '#app',
    router:router
});
