<template>
  <div>
    <nav>
      <Link href="">
      <Routerlink to="/auth/login">Register</Routerlink>
    </nav>
    <main><RouterView/></main>
  </div>

</template>

<script>
import Login from '../components/Login.vue'
import Register from '../components/Register.vue'
export default {
  components : {Login, Register},
  data(){

  }
}
</script>

<style>

</style>