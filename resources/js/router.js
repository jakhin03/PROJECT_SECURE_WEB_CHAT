import { createRouter, createWebHistory } from 'vue-router'
import ListRoom from './pages/ListRoom.vue'
import Room from './pages/Room.vue'
import Dashboard from './pages/Dashboard.vue'

const routes = [
  {
    path: '/rooms',
    name: 'list.room',
    component: ListRoom
  },
  {
    path: '/rooms/:roomId',
    name: 'room',
    component: Room
  },
  {
    path: '/',
    name: 'Dashboard',
    component: Dashboard,
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
