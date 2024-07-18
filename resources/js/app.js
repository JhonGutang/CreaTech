import './bootstrap';
import { createApp } from 'vue';

// Vuetify
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

import router from "./router/router";

import App from "./App.vue"
import Auth from "./Auth.vue"

const vuetify = createVuetify({
    components,
    directives,
})

createApp(Auth).use(router).use(vuetify).mount("#auth")
createApp(App).use(router).mount("#app")