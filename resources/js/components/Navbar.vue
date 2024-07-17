<template>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand fs-3 fw-bold" href="#">
        <span class="d-flex">
          <img :src="logoUrl" alt="" class="me-3" />
          <div>
            {{ name }}
            <div class="underline"></div>
          </div>
        </span>
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-end pe-5"
        id="navbarNav"
      >
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#services">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#offers">Offers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#aboutUs">About Us</a>
          </li>
          <li class="nav-item">
            <router-link to="/auth" class="text-white nav-link"> Login</router-link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>
<script>
export default {
    props : ["name", "logoUrl"],
    name : "Navbar"
}
</script>

<style scoped>
img {
  width: 50px;
}
  .underline {
    width: 70px;
    height: 5px;
    background-color: red;
  }
</style>