<template>
  <div>
     <Navbar />
    <Slider />
   
    <AboutSummary/>
    <div class="mt-5"></div>
    <Services/>
    <div class="mt-5"></div>
    <Testimonials/>
    <Footer/>
  </div>
</template>

<script>
import Navbar from './components/layout/Navbar.vue';
import Slider from './components/Slider.vue';
import AboutSummary from './components/AboutSummary.vue';
import Services from './components/Services.vue';
import Testimonials from './components/Testimonials.vue';

import Footer from './components/layout/Footer.vue';


export default {
  components: {
    Slider,
    AboutSummary,
    Services,
    Testimonials,
    Navbar,
    Footer
  }
}
</script>