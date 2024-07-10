<template>
  <div class="container-fluid cont pt-2 mt-5">
    <div class="mt-5"></div>
    <div class="row">
      <div class="col pt-5">
        <div
          class="container border border-4 rounded border-danger ms-4 aboutCont py-5 px-5"
        >
          <h4>About Us</h4>
          <div class="underline mb-3"></div>
          <p>
            At
            <span class="fw-bold"
              >{{ title }}, we're passionate about bringing your digital vision
              to life.</span
            >
            We're a team of skilled developers and project management wizards
            dedicated to crafting exceptional web and mobile experiences.
          </p>
          <p>
            <span class="fw-bold"
              >We believe in the power of a well-managed project.</span
            >That's why we offer a seamless blend of web development, mobile
            development, and meticulous project management. Our approach ensures
            your project stays on track, on budget, and exceeds expectations.
          </p>
          <p class="fw-bold">Here's what sets us apart:</p>
          <ul>
            <li> <span class="fw-bold"> Expert Development:</span> Our developers are fluent in the latest technologies, crafting beautiful, user-friendly web and mobile applications.</li>
            <li> <span class="fw-bold">Streamlined Project Management: </span> We keep your project organized and moving forward, with clear communication and efficient execution.</li>
            <li> <span class="fw-bold">Exceptional Results: </span> We don't just build, we optimize. Your project will be delivered flawlessly and ready to make a splash.</li>
          </ul>
          <p> <span class="fw-bold">We're more than just developers and project managers – we're your trusted partners.</span>We take the time to understand your unique needs and goals, translating them into a digital solution that delivers real impact.</p>
        </div>
      </div>
      <div class="col">
        <img :src="aboutusImg" alt="" srcset="" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["aboutusImg", "title"],
};
</script>

<style scoped>
.cont {
  height: 110vh;
}

.underline {
  margin-top: -5px;
  width: 70px;
  height: 4px;
  background-color: red;
}

img {
    margin-top: 60px;
}
</style>