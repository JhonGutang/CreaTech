<template>
    <div>
      <h2>Edit User</h2>
      <form @submit.prevent="editForm">
        <div class="form-group">
          <label for="firstName">First Name</label>
          <input type="text" class="form-control" id="firstName" v-model="form.firstName" required>
        </div>
        <div class="form-group">
          <label for="lastName">Last Name</label>
          <input type="text" class="form-control" id="lastName" v-model="form.lastName" required>
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" v-model="form.email" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </template>


<script setup>
import {useForm} from '@inertiajs/vue3'
import { defineProps } from 'vue';

const props = defineProps({
  errors: Object,

});

const form = useForm ({
  firstName: null,
  lastName: null,
  email: null
})
</script>

<style scoped>
/* Add custom styles here if needed */
</style>