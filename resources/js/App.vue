<script setup>
// import checkSession from "./sessionCheck";
// checkSession();
import { ref, watch, provide, computed } from "vue";
import { useRoute } from "vue-router";
import { Toast } from "bootstrap";
// provide this for all children
// globalProperties doesn't help here since in children we're accessing in <script>
provide("$rooms", window.__app__.rooms); // we always have user if they login as we return user object in app.blade.php
provide("$user", window.__app__.user);
provide("$emojis", window.__app__.emojis);
provide("$appName", window.__app__.appName);
provide("$confettiWords", window.__app__.confettiWords);
provide("$Echo", window.Echo);
provide("$showToast", showToast);

const csrfToken = ref(
  document.head.querySelector('meta[name="csrf-token"]').content
);
const transitionName = ref("fade");
const route = useRoute();
const user = window.__app__.user.name;
const appName = window.__app__.appName;
const toastMsg = ref({
  title: "Title",
  message: "Message",
});

watch(
  () => route.name,
  (newValue) => {
    if (newValue === "room") {
      transitionName.value = "slide-left";
    } else {
      transitionName.value = "slide-right";
    }
  }
);
const adminAccount = import.meta.env.VITE_APP_ADMIN_ACCOUNT;
const isLoggedIn = ref(window.__app__.user !== null);

const showAdminLinks = computed(() => {
  return isLoggedIn.value && window.__app__.user.email === adminAccount;
});

function showToast(title, message) {
  toastMsg.value = {
    title,
    message,
  };
  const toastEl = document.getElementById("bs_toast");

  const toastBootstrap = Toast.getOrCreateInstance(toastEl);
  toastBootstrap.show();
}
</script>

<template>
  <div class="h-100 app-container">
    <div class="h-100 container font-sans position-relative chat-container">
      <div class="app-header">
        <div
          class="d-flex justify-content-between align-items-center flex-column flex-md-row"
        >
          <router-link
            to="/"
            class="btn btn-link link-underline-opacity-0 text-black link-body-emphasis link-underline-opacity-100-hover"
          >
            <h2>
              {{ appName }}
            </h2>
          </router-link>
            <div class="dropdown">
            <button
              class="btn btn-link fs-4 link-underline-opacity-0 text-black link-body-emphasis link-underline-opacity-100-hover dropdown-toggle"
              type="button"
              id="dropdownMenuButton"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              {{ user }}
            </button>
            <ul class="dropdown-menu" style="font-size:0.875rem;" aria-labelledby="dropdownMenuButton">
              <li v-if="showAdminLinks">
                <a class="dropdown-item" href="/dashboard">Admin Dashboard</a>
              </li>
              <li>
              <a class="dropdown-item" href="/profile">Profile</a>
              </li>
              <li>
              <a class="dropdown-item" href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="font-size: 0.875rem;">
              Logout
              </a>
              </li>
            </ul>
            </div>
              <form
              id="logout-form"
              action="/logout"
              method="POST"
              style="display: none"
            >
              <input type="hidden" name="_token" :value="csrfToken" />
            </form>
        </div>
      </div>
      <router-view v-slot="{ Component }">
        <transition :name="transitionName" mode="out-in" appear>
          <component :is="Component" />
        </transition>
      </router-view>
    </div>
  </div>

  <div class="toast-container position-fixed top-0 end-0 p-3">
    <div
      id="bs_toast"
      class="toast"
      role="alert"
      aria-live="assertive"
      aria-atomic="true"
    >
      <div class="toast-header">
        <strong class="me-auto">{{ toastMsg.title }}</strong>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="toast"
          aria-label="Close"
        ></button>
      </div>
      <div class="toast-body">{{ toastMsg.message }}</div>
    </div>
  </div>
</template>

<style lang="scss">
body,
html {
  height: 100%;
  margin: 0;
  // overflow: hidden;
}

.app-container {
  background: #F3F4F6;

  .app-header {
    position: absolute;
    width: 100%;
    top: 30px;

    .btn-logout {
      margin-right: 30px;
    }
  }
}

.chat {
  margin-top: auto;
  margin-bottom: auto;

  .contacts_body {
    padding: 0.75rem 0 !important;
    overflow-y: auto;
    white-space: nowrap;

    .contacts {
      list-style: none;
      padding: 0;

      li {
        width: 100% !important;
        padding: 5px 10px;
        transition: background-color 0.2s;
        cursor: pointer;
        position: relative;

        &:hover {
          background-color: rgba(0, 0, 0, 0.3);
        }

        &.active {
          background-color: rgba(0, 0, 0, 0.3);
        }

        .current-user-mark {
          height: 100%;
          width: 3px;
          background: #00ffa4;
          position: absolute;
          left: 0;
          top: 0;
        }

        .img_cont {
          position: relative;

          .user_img {
            height: 45px;
            width: 45px;
            border: 2px solid #f5f6fa;
          }
        }
      }
    }
  }
}

.container {
  align-content: center;
}

.user_img_msg {
  height: 40px;
  width: 40px;
  border: 2px solid #f5f6fa;
}

.online_icon {
  position: absolute;
  height: 15px;
  width: 15px;
  background-color: #4cd137;
  border-radius: 50%;
  bottom: 17px;
  right: 0;
  border: 2px solid white;
}

.offline {
  background-color: #c2c2c2 !important;
}

.user_info {
  margin-top: auto;
  margin-bottom: auto;
  margin-left: 15px;
}

.user_info span {
  font-size: 20px;
  color: white;
}

.user_info p {
  font-size: 10px;
  color: rgba(255, 255, 255, 0.6);
}

.msg_container {
  margin-top: auto;
  margin-bottom: auto;
  margin-left: 10px;
  border-radius: 25px;
  background-color: #00a0e5;
  padding: 10px;
  position: relative;
  color: white;
  word-break: break-word;
  max-width: 70%;
}

.msg_container_send {
  margin-top: auto;
  margin-bottom: auto;
  margin-right: 10px;
  border-radius: 25px;
  background-color: #42e274;
  padding: 10px;
  position: relative;
  color: white;
  word-break: break-word;
  max-width: 70%;
}

@media (max-width: 768px) {
  .app-container {
    height: auto !important;

    .app-header {
      position: initial;
      padding-top: 30px;

      .btn-logout {
        margin-right: 0;
      }
    }

    .chat {
      margin-top: 1rem;

      &:last-child,
      &:first-child {
        margin-top: 1rem;
      }
    }
  }
}

@media (max-width: 576px) {
  .contacts_card {
    margin-bottom: 15px !important;
  }
}

.font-12px {
  font-size: 12px !important;
}

.img_cont_msg {
  width: 40px;
  height: 40px;

  span {
    width: 36px;
    height: 36px;
  }
}

@keyframes wave {
  0%,
  60%,
  100% {
    transform: initial;
  }

  30% {
    transform: translateY(-15px);
  }
}

#wave {
  .dot {
    display: inline-block;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    margin-right: 1px;
    background: white;
    animation: wave 1.3s linear infinite;
    margin-bottom: 3px;

    &:nth-child(2) {
      animation-delay: -1.1s;
    }

    &:nth-child(3) {
      animation-delay: -0.9s;
    }
  }
}

.blink-anim {
  animation: blink 2s infinite;
}

@keyframes wave {
  0%,
  60%,
  100% {
    transform: initial;
  }

  30% {
    transform: translateY(-7px);
  }
}

@keyframes blink {
  0%,
  100% {
    background: white;
  }

  50% {
    background: #2e7fd7;
  }
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}

.fade-enter,
.fade-leave-to

/* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}

.slide {
  &-left,
  &-right {
    &-enter,
    &-leave {
      &-active {
        transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
      }
    }
  }
}

.slide {
  &-left-enter,
  &-right-leave-active {
    opacity: 0;
    transform: translate(30px, 0);
  }
}

.slide {
  &-left-leave-active,
  &-right-enter {
    opacity: 0;
    transform: translate(-30px, 0);
  }
}
</style>
