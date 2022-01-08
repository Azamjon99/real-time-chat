import Vue from "vue";
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Login from "../components/login/Login";

const routes = [
    { path: '/login', component: Login },
    // { path: '/user', component: require('./components/User.vue') }
  ]

  const router = new VueRouter({
    routes,
    hashbang:false,
    mode : "history"
  })

//   const app = new Vue({
//     router
//   }).$mount('#app')
export default router
