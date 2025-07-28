<template>
  <div>
    <Navbar />
    <slot />
    <Footer />
  </div>
</template>

<script>

import Navbar from './Navbar.vue'
import Footer from './Footer.vue'


export default {
  components: { Navbar, Footer }
}
</script>
