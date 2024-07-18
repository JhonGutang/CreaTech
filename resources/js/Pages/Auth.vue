<template>
  <v-app>
    <Head :title="$page.component"/>
    <Login v-if="!receivedData" @child-event="handleChildEvent"/>
    <Register v-if="receivedData" @child-event="handleChildEvent" />
  </v-app>
</template>

<script>
import Login from "../components/Login.vue";
import Register from "../components/Register.vue";
import { Head } from '@inertiajs/vue3'

export default {
  components: { Login, Register },
  data () {
    return {
      currentComponent : 'Login',
      receivedData : '',
  
    };
  },
  methods : {
    handleChildEvent(data) {
      console.log('Received data in parent:', data);
      this.receivedData = data; 
    },
    toggleAuthComponents () {
      this.currentComponent = (this.currentComponent === 'Login') ? 'Register' : 'Login'

    },
  }
};

</script>