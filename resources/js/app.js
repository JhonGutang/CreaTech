import './bootstrap';
import { createApp } from 'vue';


import router from "./router/router";

import App from "./App.vue"
import Auth from "./Pages/Auth.vue"


createApp(App).use(router).mount("#app")
createApp(Auth).use(router).mount("#auth")