<template>
  <v-app>
    <Login v-if="!receivedData" @child-event="handleChildEvent"/>
    <Register v-if="receivedData" @child-event="handleChildEvent" />
  </v-app>
</template>

<script>
import Login from "./components/Login.vue";
import Register from "./components/Register.vue";

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
      this.receivedData = data; // Update the receivedData variable in parent with data from child
    },
    toggleAuthComponents () {
      this.currentComponent = (this.currentComponent === 'Login') ? 'Register' : 'Login'

    },
  }
};

</script>