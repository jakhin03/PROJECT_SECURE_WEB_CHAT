<script setup>
import { ref, onBeforeMount, onMounted } from "vue";
import ChatItem from "./ChatItem.vue";
import laravelEchoServer from "../../../laravel-echo-server.json";

const message = ref("");
const list_messages = ref([]);

const { appId, key } = laravelEchoServer.clients[0]; // thêm mới
const csrfToken = ref(""); // thêm mới
const usersOnline = ref(0); // thêm mới

onBeforeMount(() => {
    loadMessage();
    Echo.channel("chatroom").listen(
        "MessagePosted",
        (data) => {
            const message = data.message;
            message.user = data.user;
            list_messages.value.push(message);
        }
    );
});

onMounted(() => {
    // lấy giá trị csrfToken
    csrfToken.value = document.head.querySelector(
        'meta[name="csrf-token"]'
    ).content;

    setInterval(() => {
        getUsersOnline(); // lấy số users online mỗi 3 giây (tuỳ chỉnh theo ý muốn)
    }, 3000);
});

async function loadMessage() {
    try {
        const response = await axios.get("/messages");
        list_messages.value = response.data;
    } catch (error) {
        console.log(error);
    }
}

async function sendMessage() {
    try {
        const response = await axios.post("/messages", {
            message: message.value,
        });
        list_messages.value.push(response.data.message);
        message.value = "";
    } catch (error) {
        console.log(error);
    }
}

async function getUsersOnline() {
    try {
        const response = await axios.get(
            `${window.location.protocol}//${window.location.hostname}:6001/apps/${appId}/channels/chatroom?auth_key=${key}`
        );
        usersOnline.value = response.data.subscription_count;
    } catch (error) {
        console.log(error);
    }
}
</script>

<template>
    <div>
        <div class="users-online">
            <button type="button" class="btn btn-primary">
                Users online:
                <span class="badge badge-light">{{ usersOnline }}</span>
            </button>
        </div>
        <div class="btn-logout">
            <a
                class="btn btn-danger"
                href="/logout"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();"
            >
                Logout
            </a>
            <form
                id="logout-form"
                action="/logout"
                method="POST"
                style="display: none"
            >
                <input type="hidden" name="_token" :value="csrfToken" />
            </form>
        </div>

        <div class="chat">
            <div class="chat-title">
                <h1>Chatroom</h1>
            </div>
            <div class="messages">
                <div class="messages-content">
                    <ChatItem
                        v-for="(message, index) in list_messages"
                        :key="index"
                        :message="message"
                    ></ChatItem>
                </div>
            </div>
            <div class="message-box">
                <input
                    type="text"
                    v-model="message"
                    @keyup.enter="sendMessage"
                    class="message-input"
                    placeholder="Type message..."
                />
                <button
                    type="button"
                    class="message-submit"
                    @click="sendMessage"
                >
                    Send
                </button>
            </div>
        </div>
        <div class="bg"></div>
    </div>
</template>

<style lang="scss" scoped>
.messages {
    height: 80%;
    overflow-y: scroll;
    padding: 0 20px;
}
/*--------------------
Body
--------------------*/
.bg {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 1;
    background: #373C42;
    transform: scale(1.2);
}
/*--------------------
Chat
--------------------*/
.chat {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 1200px;
    height: 80vh;
    max-height: 700px;
    z-index: 2;
    overflow: hidden;
    box-shadow: 0 5px 30px rgba(0, 0, 0, 0.2);
    background: rgba(0, 0, 0, 0.5);
    border-radius: 20px;
    display: flex;
    justify-content: space-between;
    flex-direction: column;
}
/*--------------------
Chat Title
--------------------*/
.chat-title {
    flex: 0 1 45px;
    position: relative;
    z-index: 2;
    background: rgba(0, 0, 0, 0.2);
    color: #fff;
    text-transform: uppercase;
    text-align: left;
    padding: 10px 10px 10px 50px;

    h1,
    h2 {
        font-weight: normal;
        font-size: 16px;
        margin: 0;
        padding: 0;
    }
    h2 {
        color: rgba(255, 255, 255, 0.5);
        font-size: 8px;
        letter-spacing: 1px;
    }

    .avatar {
        position: absolute;
        z-index: 1;
        top: 8px;
        left: 9px;
        border-radius: 30px;
        width: 30px;
        height: 30px;
        overflow: hidden;
        margin: 0;
        padding: 0;
        border: 2px solid rgba(255, 255, 255, 0.24);
        img {
            width: 100%;
            height: auto;
        }
    }
}
/*--------------------
Message Box
--------------------*/
.message-box {
    flex: 0 1 40px;
    width: 100%;
    background: rgba(0, 0, 0, 0.3);
    padding: 10px;
    position: relative;

    & .message-input {
        background: none;
        border: none;
        outline: none !important;
        resize: none;
        color: rgba(255, 255, 255, 0.7);
        font-size: 11px;
        height: 17px;
        margin: 0;
        padding-right: 20px;
        width: 100%;

        &::-webkit-scrollbar {
            display: none;
        }
    }
    textarea:focus:-webkit-placeholder {
        color: transparent;
    }

    & .message-submit {
        position: absolute;
        z-index: 1;
        top: 9px;
        right: 10px;
        color: #fff;
        border: none;
        background: #248a52;
        font-size: 10px;
        text-transform: uppercase;
        line-height: 1;
        padding: 6px 10px;
        border-radius: 10px;
        outline: none !important;
        transition: background 0.2s ease;
        &:hover {
            background: #1d7745;
        }
    }
}

.users-online {
    position: absolute;
    top: 20px;
    left: 50px;
    z-index: 3;
}

.btn-primary{
  color: #fff;
  background-color: #4B63E2;
  border-color: #4B63E2;
  border-radius: 20px;
  overflow: hidden;
}

.btn-logout {
    position: absolute;
    top: 20px;
    right: 50px;
    z-index: 3;
    border-radius: 20px;
    overflow: hidden;
}
</style>
