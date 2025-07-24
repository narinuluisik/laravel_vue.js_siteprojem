<template>
  <div>
    <Slider />
    <AboutSummary />
    <Services />
    <Testimonials />
  </div>
</template>

<script>
import Slider from '../sections/Slider.vue';
import AboutSummary from '../sections/AboutSummary.vue';
import Services from '../sections/Services.vue';
import Testimonials from '../sections/Testimonials.vue';

export default {
  components: {
    Slider,
    AboutSummary,
    Services,
    Testimonials,
  },
};
</script>
