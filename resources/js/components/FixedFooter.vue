<template>
  <div class="container-fluid position-fixed footer">
    <div class="underline"></div>
    <div class="row flex-column pt-2">
      <div class="col text-center">
        <i class="me-3 text-white fs-5 bi bi-facebook"></i>
        <i class="me-3 text-white fs-5 bi bi-twitter"></i>
        <i class="me-3 text-white fs-5 bi bi-instagram"></i>
        <i class="me-3 text-white fs-5 bi bi-linkedin"></i>
      </div>
      <div class="col text-center mt-2">
        <h6 class="text-white">@Copyright 2024 CreaTech</h6>
      </div>
    </div>
  </div>
</template>

<style scoped>
    .footer {
        height: 10%;
        bottom: 0;
        background-color: #DC3545;
    }

    i {
      cursor: pointer;
    }

    .underline {
      width: 100vw;
      margin-left: -12px;
      height: 5px;
      background-color: #1d2331;
    }
</style>