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
  <v-table height="400px" class="table table-bordered table-fused w-75 mx-auto mt-10">
    <thead>
      <tr>
        <th class="text-left">Name</th>
        <th class="text-left">Email</th>
        <th class="text-left">Edit</th>
        <th class="text-left">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="user in users.data" :key="user.id" class="customTr">
        <td>{{ user.firstName }}</td>
        <td>{{ user.email }}</td>
        <td><button @click.prevent="editUser(user.id)">...</button></td>
        <td>
          <button @click.prevent="deleteUser(user.id)">
            <i class="bi bi-trash" color="danger"></i>
          </button>
        </td>
      </tr>
    </tbody>
  </v-table>
</template>





<style scoped>
.customSize {
  border: 5px solid black;
  border-radius: 20px;
  /* width: 75%; */
  border-collapse: collapse !important;
}
.table-fused {
    border-collapse: collapse; /* Collapse borders */
}

.table-fused td,
.table-fused th {
    border: none; /* Remove borders */
}
.table-fused th,
.table-fused td {
    padding: 8px; /* Adjust padding as needed */
    text-align: left; /* Align text as needed */
}

.customTr {
  border: 2px solid black !important;
}
</style>