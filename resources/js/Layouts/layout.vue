<template>
  
    <v-app-bar :elevation="2" class="customNavColor" scroll-behaviour="collapse">
        <template v-slot:prepend>
            <v-app-bar-nav-icon></v-app-bar-nav-icon>
        </template>
        
        <v-app-bar-title class="text-white">
            Web Development
        </v-app-bar-title>
        <div v-if="$page.props.auth.user">
            <Link :href="route('logout')" method="post" class="nav-link text-white me-5"> Logout</Link>
        </div>
        <div v-else>
            <Link :href="route('login')" class="nav-link text-white"> Login</Link>
        </div>
        
    </v-app-bar>
    <!-- Your main app content -->
</template>
  
  <script setup>
import { Link } from "@inertiajs/vue3";
</script>
  
  <style scoped>
.customNavColor {
  background-color: #dc3545 !important; /* Use !important to ensure it overrides Vuetify's default styles */
}
</style>
  
