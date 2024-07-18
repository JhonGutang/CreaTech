<template>
  <div class="container-fluid customBorderBlack rect">
    <div class="row h-100 mt-5">
      <div class="col text-white ms-5">
        <span class="d-flex">
          <img :src="logoUrl" alt="" srcset="" class="me-2">
          <div>
            <h4 class="">
              {{ name }}
            </h4>
            <div class="underline mb-3"></div>
          </div>
        </span>
        <h6>
          Bringing visions to life. We build and manage your web & mobile
          projects.
        </h6>
    </div>
    <div class="col text-white ms-5 ps-5">
        <h5>Services</h5>
        <div class="underline mb-3"></div>
        <h6 v-for="service in services" :key="service.id" class="mb-3">
            {{ service.name }}
        </h6>
    </div>
    <div class="col text-white">
        <h5>Contact</h5>
        <div class="underline mb-3"></div>
        <h6 class="mb-3"><i class="bi bi-house-fill"></i> Cabitoonan, Toledo City</h6>
        <h6 class="mb-3">
          <i class="bi bi-envelope-at-fill"></i> jhonbarrygutang@gmail.com
        </h6>
        <h6 class="mb-3"><i class="bi bi-telephone-fill"></i>+639 955 695 397</h6>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["services", "name", "logoUrl"],
};
</script>

<style scoped>

img {
  width: 50px;
  height: 50px;
  margin-top: -7px;
}

.rect {
  height: 38vh;
  background-color: #1d2331;
}


.underline {
    width: 50px;
    height: 2px;
    margin-top: -3px;
    background-color: red;
}

.customBorderBlack {
  border:  solid #1d2331;
}
</style>