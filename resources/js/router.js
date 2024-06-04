import { createRouter, createWebHistory } from 'vue-router'
import ListRoom from './pages/ListRoom.vue'
import Room from './pages/Room.vue'
import checkSession from './sessionCheck';

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
router.beforeEach(async (to, from, next) => {
      const sessionActive = await checkSession(); // Kiểm tra session    
    if (!sessionActive) {
      // Chuyển hướng đến trang đăng nhập nếu session hết hạn
      return; // Dừng lại, không gọi next()
    } else {
      next(); // Tiếp tục điều hướng nếu session còn hiệu lực
    } 
});
export default router
