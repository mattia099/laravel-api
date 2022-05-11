import Vue from 'vue'
import VueRouter from 'vue-router'

import Posts from '../pages/Posts.vue'
import Contact from '../pages/Contact.vue'
import Post from '../pages/Post.vue'
import NotFound from '../pages/NotFound.vue'

Vue.use(VueRouter)

const routes = [
  {
    path : '/posts',
    component : Posts,
  },
  {
    path: '/posts/:slug',
    name: 'posts.show',
    component: Post,
  },
  {
    path: '/contact',
    component: Contact,
  },
  {
    path: '/*',
    component: NotFound,
  }
  
]

const router = new VueRouter({
  mode: 'history',
  routes: routes
});

export default router;