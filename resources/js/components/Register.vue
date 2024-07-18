<template>
  <v-app>
    <v-container class="w-75 h-75 my-auto">
      <v-row class="h-100 customRounded">
        <v-col cols="6" class="h-100 loginGreeting">
          <v-row class="d-flex flex-column justify-center h-100">
            <v-col class="imgContainer d-flex justify-content-center pt-5">
              <img
                src="../../../public/img/hero2.png"
                alt=""
                srcset=""
                class="mx-auto"
              />
            </v-col>
            <v-col>
              <div class="text-h5 text-light text-center">
                Connecting you securely to what matters most."
              </div>
            </v-col>
          </v-row>
        </v-col>
        <v-col class="customBorder">
          <v-sheet class="mx-auto pt-15" width="400" height="450">
            <div class="text-h4 mb-5">Register</div>
            <v-form @submit.prevent="registerUser" class="h-100">
              <v-card class="overflow-auto px-2" height="300">
                <!-- First Name -->
                <v-text-field
                  v-model="form.firstName"
                  label="First Name"
                  required
                >
                <small>{{form.errors.name}}</small>

              </v-text-field>
                
                <!-- Last Name -->
                <v-text-field
                v-model="form.lastName"
                label="Last Name"
                required
                ></v-text-field>
                <small>{{form.errors.name}}</small>
                
                <!-- Email -->
                <v-text-field
                v-model="form.email"
                label="Email"
                required
                type="email"
                ></v-text-field>
                <small>{{form.errors.name}}</small>
                
                <!-- Password -->
                <v-text-field
                v-model="form.password"
                label="Password"
                required
                type="password"
                ></v-text-field>
                <small>{{form.errors.name}}</small>

                <v-text-field
                v-model="form.password_confirmation"
                label="Password"
                required
                type="password"
                ></v-text-field>
                <small>{{form.errors.name}}</small>
              </v-card>

              <!-- Submit Button -->
              <v-btn
                class="mt-3 mb-2 text-light customButton"
                height="50"
                type="submit"
                block
              >
                Register
              </v-btn>

              <!-- Login link -->
              <div class="text-center">
                <span>
                  <h6>
                    Already have an account?
                    <a href="#" class="text-danger" @click="sendDataToParent"
                      >Login Now</a
                    >
                  </h6></span
                >
              </div>
            </v-form>
          </v-sheet>
        </v-col>
      </v-row>
    </v-container>
  </v-app>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
    
const form = useForm({

  firstName: null,
  lastName: null,
  email: null,
  password: null,
  password_confirmation: null,
})

function sendDataToParent() {
      const dataToSend = false;
      this.$emit("child-event", dataToSend);
    }

    function registerUser(){
      form.post('/auth')
    }

  
</script>

<style scoped>
.container {
  border: 3px solid red;
}
.loginGreeting {
  background-color: #dc3545;
}
.customBorder {
  /* border: 8px solid #dc3545; */
  border: 8px solid gray;
}

.imgContainer img {
  height: 300px;
}

.customRounded {
  border: 1px solid #dc3545;
  border-radius: 5px;
}

.customButton {
  background-color: #dc3545;
}

.textFieldPaddingLeft {
  padding-left: 30px;
}
</style>