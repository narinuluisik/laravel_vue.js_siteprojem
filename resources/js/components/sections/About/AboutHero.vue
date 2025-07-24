<template>
  <section
    class="hero-section position-relative"
    style="background: linear-gradient(to right, #232946, #6366F1); padding: 140px 0 100px 0; color: white;"
  >
    <div class="container d-flex justify-content-center">
      <div
        class="glass-box p-5 rounded-4 shadow-lg text-center"
        style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); max-width: 800px;"
      >
        <h2 class="fw-bold mb-3" style="font-size: 2.5rem;">{{ about.title }}</h2>
        <h5 class="mb-4" style="color: #E0E7FF;">{{ about.sub_title }}</h5>
        <p style="line-height: 1.8; font-size: 1.1rem;" v-html="formattedContent"></p>
      </div>
    </div>

    <!-- SVG dalga -->
    <div style="position:absolute; left:0; right:0; bottom:-1px; width:100%; line-height:0;">
      <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" style="width:100%; height:80px;">
        <path d="M0,40 C360,120 1080,0 1440,60 L1440,80 L0,80 Z" fill="#f6f8fb" />
      </svg>
    </div>
  </section>
</template>


<script>
export default {
  props: {
    about: Object
  },
  computed: {
    formattedContent() {
      return this.about.content ? this.about.content.replace(/\n/g, '<br>') : ''
    }
  }
}
</script>
