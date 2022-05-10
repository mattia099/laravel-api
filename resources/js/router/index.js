import Vue from 'vue'
import VueRouter from 'vue-router'

import Posts from '../pages/Posts.vue'
import Contact from '../pages/Contact.vue'

Vue.use(VueRouter)

const routes = [
  {
    path : '/posts',
    component : Posts,
  },
  {
    path: '/contact',
    component: Contact,
  }
]

const router = new VueRouter({
  mode: 'history',
  routes: routes
});

export default router;