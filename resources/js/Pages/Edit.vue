<script setup>
import {useForm, Head, router} from '@inertiajs/vue3'
import { defineProps } from 'vue';


const props = defineProps({
  errors: Object,
  user: Object,
});

const form = useForm ({
  firstName: props.user.firstName,
  lastName: props.user.lastName,
  email: props.user.email
})

function editForm(id) {
  router.put('/dashboard/' + id, form)

}
</script>







<template>
  <Head :title="$page.component"/>
    <div>
      <h2>Edit User</h2>
      <form @submit.prevent="editForm(user.id)">
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






<style scoped>
/* Add custom styles here if needed */
</style>