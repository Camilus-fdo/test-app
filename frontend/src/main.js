import Vue from 'vue'
import App from './App.vue'
import Router from './router.js'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios, axios)

import Navbar from './components/Navbar.vue'

Vue.component('navbar', Navbar)
new Vue({
  el: '#app',
  render: h => h(App),
  router: Router

})
