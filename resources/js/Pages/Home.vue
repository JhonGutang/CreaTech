<template>
  <Navbar :name="title" :logUrl="logoImgUrl"/>
  <Hero :name="title" :imgUrl="heroImgUrl" />
  <Service :services="services" :title="title" />
  <Banner :services="services" />
  <AboutUs :aboutusImg="aboutImgUrl" :title="title" />
  <Footer :services="services" :name="title" :logoUrl="logoImgUrl" />
  <FixedFooter />
</template>

<script>
import Navbar from "../components/Navbar.vue";
import Hero from "../components/Hero.vue";
import Service from "../components/Service.vue";
import Banner from "../components/Banner.vue";
import AboutUs from "../components/AboutUs.vue";
import Footer from "../components/Footer.vue";
import FixedFooter from "../components/FixedFooter.vue";

export default {
  components: { Navbar, Hero, Service, Banner, AboutUs, Footer, FixedFooter },
  data() {
    return {
      title: "CreaTech",
      logoImgUrl: "img/logo.png",
      heroImgUrl: "img/hero1.png",
      aboutImgUrl: "img/aboutus.png",
      services: [
        {
          id: 1,
          name: "Web Development",
          description:
            "We provide top-notch web development services tailored to meet your business needs, ensuring a seamless online presence with responsive and visually appealing websites. Our team of experts leverages the latest technologies to deliver robust and scalable solutions that drive growth and success.",
          offers: [
            "Website Design and Redesign",
            "Front End Development",
            "Back End Development",
            "Fullstack Development",
            "E-commerce Development",
          ],
        },
        {
          id: 2,
          name: "Mobile Development",
          description:
            "We specialize in mobile development, creating innovative and user-friendly apps that enhance your business’s reach and engagement. Our team utilizes the latest technologies to deliver high-performance, scalable mobile solutions tailored to your unique needs.",
          offers: [
            "Native Mobile App Development",
            "Cross-Platform Mobile Development",
            "Mobile UI/UX Design",
            "Mobile Back End Development",
          ],
        },
        {
          id: 3,
          name: "Project Management",
          description:
            "We excel in project management, ensuring your projects are delivered on time, within budget, and to the highest standards. Our experienced team uses proven methodologies to coordinate and streamline every phase, guaranteeing successful and efficient project outcomes.",
          offers: [
            "Project Planning and Scope Definition",
            "Resource Allocation and Scheduling",
            "Risk Management",
          ],
        },
      ],
    };
  },
};
</script>

<style>
</style>