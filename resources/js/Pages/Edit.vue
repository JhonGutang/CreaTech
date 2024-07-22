<script setup>
import {useForm, Head, router} from '@inertiajs/vue3'


const props = defineProps({
  errors: Object,
  user: Object,
});

const form = useForm ({
  username: props.user.username,
  fullname: props.user.fullname,
  email: props.user.email
})

function editForm(id) {
  router.put('/dashboard/' + id, form)

}

</script>



<template>
  <v-app>
    <Head :title="$page.component" />
    <v-container class="w-75 customHorizontalAlign">
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
            <div class="text-h4 mb-5">Edit Info</div>
            <v-form @submit.prevent="editForm(user.id)" class="h-100">
                <!-- User Name -->
                <v-text-field
                  class="fields"
                  v-model="form.username"
                  label="Username"
                  required
                >
                </v-text-field>
                <small class="customRequired">{{
                  form.errors.username
                }}</small>

                <!-- Last Name -->
                <v-text-field
                  class="fields"
                  v-model="form.fullname"
                  label="Full Name"
                  required
                ></v-text-field>
                <small class="customRequired">{{ form.errors.fullname }}</small>

                <!-- Email -->
                <v-text-field
                  class="fields"
                  v-model="form.email"
                  label="Email"
                  required
                  type="email"
                ></v-text-field>
                <small class="customRequired">{{ form.errors.email }}</small>

              <!-- Submit Button -->
              <v-btn
                class="mt-3 mb-2 text-light"
                color="success"
                height="50"
                type="submit"
                block
              >
                Save Changes
              </v-btn>

              <v-btn
                class="mt-3 mb-2 text-light customCancelButton"
                height="50"
                block
                :href="route('dashboard')"
              >
                Cancel Changes
              </v-btn>
              
              
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
  height: 560px !important;
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

.customCancelButton {
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