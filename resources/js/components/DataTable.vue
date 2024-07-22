<script setup>
import { router } from "@inertiajs/vue3";

defineProps({
  users: Object,
});

function deleteUser(id) {
  router.delete("/dashboard/" + id);
}

function editUser(id) {
  router.get("/dashboard/" + id + "/edit");
}
</script>



<template>
  <v-table height="550px" class="w-75 mx-auto mt-10">
    <thead>
      <tr>
        <th class="text-left text-white customSize">Id</th>
        <th class="text-left text-white">Username</th>
        <th class="text-left text-white">Name</th>
        <th class="text-left text-white">Email</th>
        <th class="text-left text-white">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="user in users.data" :key="user.id">
        <td>{{ user.id }}</td>
        <td class="text-capitalize">{{ user.userName }}</td>
        <td class="text-capitalize">{{ user.fullName }}</td>
        <td>{{ user.email }}</td>
        <td>
          <button @click.prevent="editUser(user.id)" class="mx-5">
            <i class="bi bi-pencil-square text-green"></i>
          </button>
          <button @click.prevent="deleteUser(user.id)">
            <i class="bi bi-trash customSvgColor"></i>
          </button>
        </td>
      </tr>
    </tbody>
  </v-table>

  <div class="text-center customPositionPagination">
    <Link
      v-for="link in users.links"
      :key="link.label"
      v-html="link.label"
      :href="link.url"
      class="p-2 text-decoration-none fs-5"
    ></Link>
  </div>
</template>





<style scoped>
v-table,
th,
td {
  border: 1px solid black;
  font-size: 17px;
  text-align: left;
}

thead > tr {
  background-color: #dc3545;
}

th,
td {
  padding: 15px !important;
}

.customSvgColor {
  color: red !important;
}

.customPositionPagination {
  position: relative;
  top: -50px;
}
</style>