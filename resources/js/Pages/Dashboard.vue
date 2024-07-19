<template>
  <Head :title="$page.component" />
  <v-app>
    <Layout />

    <v-main>
        <h5 class="text-center mt-5">Welcome {{ $page.props.auth.user.firstName }}</h5>
        <DataTable :users="users"/>
    </v-main>
  </v-app>
</template>

<script setup>
import { Head } from "@inertiajs/vue3";
import DataTable from "../components/DataTable.vue";
import Layout from "../Layouts/layout.vue";

defineProps({
    users : Object,
})
</script>

<style>
</style>