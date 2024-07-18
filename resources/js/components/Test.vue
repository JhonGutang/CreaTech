<template>
  <v-app>
    <v-container class="w-100 h-100 d-flex align-center justify-center">
      <v-row class="h-100 customRounded">
        <v-col cols="6" class="h-100 loginGreeting d-flex flex-column justify-center align-center">
          <div class="imgContainer">
            <img src="../../../public/img/hero2.png" alt="Hero Image" class="mx-auto" style="max-width: 100%;" />
          </div>
          <div class="text-h5 text-light text-center mt-3">
            Connecting you securely to what matters most.
          </div>
        </v-col>
        <v-col cols="6" class="customBorder d-flex justify-center align-center">
          <v-sheet class="mx-auto pt-5 px-5" width="400">
            <div class="text-h4 mb-5">Register</div>
            <v-form @submit.prevent="registerUser" class="h-100">
              <v-card class="overflow-auto px-2 customBorder" height="300">
                <!-- First Name -->
                <v-text-field
                  v-model="form.firstName"
                  label="First Name"
                  required
                ></v-text-field>

                <!-- Last Name -->
                <v-text-field
                  v-model="form.lastName"
                  label="Last Name"
                  required
                ></v-text-field>

                <!-- Email -->
                <v-text-field
                  v-model="form.email"
                  label="Email"
                  required
                  type="email"
                ></v-text-field>

                <!-- Password -->
                <v-text-field
                  v-model="form.password"
                  label="Password"
                  required
                  type="password"
                ></v-text-field>

                <!-- Terms of Service Checkbox -->
                <v-checkbox
                  v-model="form.acceptTerms"
                  label="I accept the Terms of Service"
                  required
                ></v-checkbox>
              </v-card>

              <!-- Submit Button -->
              <v-btn
                class="my-5 text-light customButton"
                height="50"
                type="submit"
                block
              >
                Register
              </v-btn>

              <!-- Login link -->
              <div class="text-center">
                <span>Already have an account? <a href="#" class="text-danger" @click="sendDataToParent">Login Now</a></span>
              </div>
            </v-form>
          </v-sheet>
        </v-col>
      </v-row>
    </v-container>
  </v-app>
</template>

<script>
export default {
  data() {
    return {
      form: {
        firstName: '',
        lastName: '',
        email: '',
        password: '',
        acceptTerms: false
      }
    };
  },
  methods: {
    registerUser() {
      // Simulate registration logic, replace with actual implementation
      console.log('Registering user with data:', this.form);

      // Reset form after submission (optional)
      this.form.firstName = '';
      this.form.lastName = '';
      this.form.email = '';
      this.form.password = '';
      this.form.acceptTerms = false;
    },
    sendDataToParent() {
      // Emit event to parent component to handle login
      this.$emit('child-event');
    }
  }
};
</script>

<style scoped>
.loginGreeting {
  background-color: #dc3545;
  color: white;
}

.customBorder {
  border: 8px solid gray;
}

.imgContainer {
  text-align: center;
}

.customRounded {
  border: 1px solid #dc3545;
  border-radius: 5px;
}

.customButton {
  background-color: #dc3545;
}
</style>
