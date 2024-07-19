<template>
    <v-app>
      <v-app-bar app class="customNavColor">
        <v-toolbar-title>
          <Link to="/" class="text-decoration-none text-center text-white" >Web Development Contents</Link>
        </v-toolbar-title>
      </v-app-bar>
  
      <!-- Your main app content -->
    </v-app>
  </template>
  
  <script setup>
  import { Link } from '@inertiajs/vue3'
  </script>
  
  <style scoped>
  .customNavColor {
    background-color: #DC3545 !important; /* Use !important to ensure it overrides Vuetify's default styles */
  }
  </style>
  
