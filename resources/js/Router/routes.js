import Vue from "vue";
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
    // { path: '/', component: require('./components/ExampleComponent.vue') },
    // { path: '/user', component: require('./components/User.vue') }
  ]

  const router = new VueRouter({
    routes
  })

//   const app = new Vue({
//     router
//   }).$mount('#app')
export default router
