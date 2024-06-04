// sessionCheck.js
import axios from 'axios';

export default function checkSession() {
  return axios.get('/check-session')
    .then(response => {
      if (!response.data.active) {
        // Chuyển hướng đến trang đăng nhập
        window.location.href = '/login';
        return false;
      }
      return true;
    })
    .catch(error => {
      console.error(error);
      // Chuyển hướng đến trang đăng nhập nếu có lỗi
      window.location.href = '/login';
      return false;
    });
}
