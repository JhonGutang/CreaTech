<template>
  <v-app>
    <v-container class="container w-75 h-75 my-auto" >
      <v-row class="h-100">
        <v-col cols="6" class="border-lg h-100">
          <v-sheet>
            <v-btn color="success">text</v-btn>
          </v-sheet>
        </v-col>
        <v-col class="border-lg">
          <v-sheet>
            <v-btn color="success">text</v-btn>

          </v-sheet>
        </v-col>
      </v-row>
    </v-container>
  </v-app>
</template>

<script>
export default {

}
</script>

<style scoped>
  .container {
    border: 3px solid red;
  }
</style>