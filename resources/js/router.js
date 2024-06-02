import { createRouter, createWebHistory } from 'vue-router'
import ListRoom from './pages/ListRoom.vue'
import Room from './pages/Room.vue'
import {
  ref,
  onBeforeMount,
  onBeforeUnmount,
  inject,
  computed,
  watch,
} from "vue";

const rooms = inject("$rooms");
const routes = [
  {
    path: '/',
    name: 'list.room',
    component: ListRoom
  },
  {
    path: '/rooms/:roomId',
    name: 'room',
    component: Room,
  },
  {
    path: "/:catchAll(.*)",
    name: "list.room",
    component: ListRoom,
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
