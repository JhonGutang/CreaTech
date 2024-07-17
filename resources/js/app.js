import './bootstrap';
import { createApp } from 'vue';

import home from './Pages/Home.vue'
import auth from './Pages/Auth.vue'

createApp(home).mount("#home")
createApp(auth).mount("#auth")