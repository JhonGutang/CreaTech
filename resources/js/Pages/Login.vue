<template>
  <Head :title="$page.component"/>
    <v-container class="w-75 customHorizontalAlign">
      <v-row class="customRounded">
        <v-col cols="6" class=" loginGreeting">
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
            <div class="text-h4 mb-5">Login</div>
            <v-form @submit.prevent="login" class="h-100">
              <!-- First Name -->
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

              <a
                href=""
                class="float-right text-decoration-none mb-5 text-danger"
                >Forgot Password</a
              >

              <v-btn
                class="my-2 text-light customButton"
                height="50"
                type="submit"
                block
                >Login</v-btn
              >

              <span class="text-center">
                <h6>
                  Don't have any Account?
                  <Link :href="route('register')" class="text-danger text-decoration-none">Register Now</Link>
                </h6>
              </span>
            </v-form>
          </v-sheet>
        </v-col>
      </v-row>
    </v-container>
</template>

<script setup>
import { useForm, Head } from '@inertiajs/vue3'

const form = useForm({
  email : null,
  password : null
})


function login() {
  form.post(route('login'), {
    onError: () => form.reset("password"),
  });
}
</script>

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
  /* border: 8px solid gray; */
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