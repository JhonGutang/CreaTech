<script setup>

import { useForm, Head } from "@inertiajs/vue3";

const form = useForm({
  userName: null,
  fullName: null,
  email: null,
  password: null,
  password_confirmation: null,
});


function register() {
  form.post("/register", {
    onError: () => form.reset("password", "password_confirmation"),
  });
  console.log(form);
}
</script>




<template>
  <v-app>
    <Head :title="$page.component" />
    <v-container class="w-75 h-75 customHorizontalAlign">
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
            <v-form @submit.prevent="register" class="h-100">
              <v-card class="overflow-auto px-2" height="250">
                <!-- User Name -->
                <v-text-field
                  class="fields"
                  v-model="form.userName"
                  label="Username"
                  required
                >
                </v-text-field>
                <small class="customRequired">{{
                  form.errors.userName
                }}</small>

                <!-- Last Name -->
                <v-text-field
                  class="fields"
                  v-model="form.fullName"
                  label="Full Name"
                  required
                ></v-text-field>
                <small class="customRequired">{{ form.errors.fullName }}</small>

                <!-- Email -->
                <v-text-field
                  class="fields"
                  v-model="form.email"
                  label="Email"
                  required
                  type="email"
                ></v-text-field>
                <small class="customRequired">{{ form.errors.email }}</small>

        

                <!-- Password -->
                <v-text-field
                  class="fields"
                  v-model="form.password"
                  label="Password"
                  required
                  type="password"
                ></v-text-field>
                <small class="customRequired">{{ form.errors.password }}</small>

                <v-text-field
                  class="fields"
                  v-model="form.password_confirmation"
                  label="Confirm Password"
                  required
                  type="password"
                ></v-text-field>
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
                    <Link :href="route('login')" class="text-danger text-decoration-none">
                      Login Now
                    </Link>
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






<style scoped>
.container {
  border: 3px solid red;
}
.customHorizontalAlign {
  margin:100px auto ;
}
.loginGreeting {
  background-color: #dc3545;
}
.customBorder {
  border: 8px solid #dc3545;
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

.customRequired {
  position: relative;
  top: -20px;
  color: red;
}

.fields:not(:first) {
  position: relative;
  margin-top: -20px;
}
</style>