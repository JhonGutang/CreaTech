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
            <v-form fast-fail @submit.prevent class="h-100">
              <v-text-field
                v-model="username"
                :rules="usernameRules"
                label="Username"
                input-class="textFieldPaddingLeft"
              ></v-text-field>

              <v-text-field
                v-model="password"
                :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
                :rules="[rules.required, rules.min]"
                :type="showPassword ? 'text' : 'password'"
                hint="At least 8 characters"
                label="Password"
                name="password"
                counter
                @click:append="showPassword = !showPassword"
                width="445"
              ></v-text-field>

              <a
                href=""
                class="float-right text-decoration-none border mb-5 text-danger"
                >Forgot Password</a
              >

              <v-btn
                class="my-2 text-light customButton"
                height="50"
                type="submit"
                block
                >Submit</v-btn
              >

              <span class="text-center">
                <h6>
                  Don't have any Account?
                  <button @click="sendDataToParent">Send Data to Parent</button>
                </h6>
              </span>
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
      username: "",
      password: "",
      usernameRules: [(v) => !!v || "First name is required"],
      rules: {
        required: (value) => !!value || "Required.",
        min: (v) => (v && v.length >= 8) || "Min 8 characters",
      },
      showPassword: false,
    };
  },
  methods: {
    sendDataToParent() {
      const dataToSend = false;
      this.$emit("child-event", dataToSend);
    },
  },
};
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