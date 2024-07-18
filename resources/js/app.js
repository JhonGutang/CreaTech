import './bootstrap';
import { createApp } from 'vue';


import router from "./router/router";

import App from "./App.vue"
import Auth from "./Auth.vue"


<<<<<<< HEAD
createApp(Auth).use(router).use(vuetify).mount("#auth")
createApp(App).use(router).mount("#app")
=======
createApp(App).use(router).mount("#app")
createApp(Auth).use(router).mount("#auth")
>>>>>>> main
