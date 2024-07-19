<template>
   <v-table height="300px" class="customSize w-75 mx-auto mt-10">
    <thead>
      <tr>
        <th class="text-left">
          Name
        </th>
        <th class="text-left">
          Email
        </th>
        <th class="text-left">
          Edit
        </th>
      </tr>
    </thead>
    <tbody>
      <tr
        v-for="item in desserts"
        :key="item.name"
      >
        <td>{{ item.name }}</td>
        <td>{{ item.calories }}</td>
      </tr>
    </tbody>
  </v-table>
</template>

<script setup>
</script>

<style scoped>
    .customSize {
        border: 1px solid black;
        /* width: 75%; */
    }
</style>