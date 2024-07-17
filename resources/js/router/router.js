import { createMemoryHistory, createRouter } from 'vue-router'

import Login from './HomeView.vue'
import Register from './AboutView.vue'

const routes = [
  { path: '/', component: HomeView },
  { path: '/about', component: AboutView },
]

const router = createRouter({
  history: createMemoryHistory(),
  routes,
})