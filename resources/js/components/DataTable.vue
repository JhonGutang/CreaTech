<script setup>
import {router} from '@inertiajs/vue3' ;

defineProps({
  users: Object,
});

function deleteUser(id){
  router.delete('/dashboard/'+ id)
}

function editUser(id){
  router.get('/dashboard/' + id + '/edit')
}
</script>



<template>
  <v-table height="550px" class=" w-75 mx-auto mt-10">
    <thead>
      <tr>
        <th class="text-left text-white">Id</th>
        <th class="text-left text-white">Username</th>
        <th class="text-left text-white">Name</th>
        <th class="text-left text-white">Email</th>
        <th class="text-left text-white">Edit</th>
        <th class="text-left text-white">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="user in users.data" :key="user.id">
        <td>{{ user.id }}</td>
        <td>{{ user.userName }}</td>
        <td>{{ user.fullName }}</td>
        <td>{{ user.email }}</td>
        <td><button @click.prevent="editUser(user.id)">...</button></td>
        <td>
          <button @click.prevent="deleteUser(user.id)">
            <i class="bi bi-trash"></i>
          </button>
        </td>
      </tr>
    </tbody>
  </v-table>
</template>





<style scoped>

v-table, th, td {
  width: 200px;
  border: 1px solid black;
  font-size: 17px;
  text-align: left;
}

thead > tr {
  background-color: #dc3545;
}

th, td {
  padding: 15px !important;
}

i {
  color: red !important;
}
</style>