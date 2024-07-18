import { createWebHistory, createRouter} from "vue-router";

// import Home from "../Pages/Home.vue";
import App from '../Pages/Home.vue'
import Auth from "../Auth.vue";

const routes = [
    {
        path: "/",
        name : 'App',
        component: App,
    },
    {
        path: "/auth",
        name : "Auth",
        component: Auth,
    },
   
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router