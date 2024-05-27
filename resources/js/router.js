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
import Dashboard from './pages/Dashboard.vue'

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
    beforeEnter: (to, from, next) => {
      const roomId = parseInt(to.params.roomId);
      const roomExists = rooms.some(room => room.id === roomId);

      if (roomExists) {
        next();
      } else {
        next('/');
      }
    }
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
