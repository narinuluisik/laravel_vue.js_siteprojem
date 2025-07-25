<template>
  <section class="hero-section position-relative">
    <div class="container d-flex justify-content-center">
      <div class="glass-box p-5 rounded-4 shadow-lg text-center">
        <h2 class="hero-title">{{ about.title }}</h2>
        <h5 class="hero-subtitle">{{ about.sub_title }}</h5>
        <p class="hero-text" v-html="formattedContent"></p>
      </div>
    </div>

    <!-- SVG Dalga -->
    <div class="hero-wave">
      <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,40 C360,120 1080,0 1440,60 L1440,80 L0,80 Z" fill="#ffffff" />
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

<style scoped>
.hero-section {
  min-height: 75vh;
  background: linear-gradient(135deg, #6C63FF, #3B3D80);
  color: white;
  padding: 120px 20px 100px 20px;
  position: relative;
  overflow: hidden;
  border-bottom-left-radius: 60px;
  border-bottom-right-radius: 60px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
  display: flex;
  align-items: center;
}

.glass-box {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(12px);
  max-width: 760px;
  margin: 0 auto;
}

.hero-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 3rem;
  font-weight: 800;
  margin-bottom: 20px;
}

.hero-subtitle {
  font-family: 'Roboto', sans-serif;
  font-size: 1.3rem;
  color: #E0E7FF;
  margin-bottom: 35px;
}

.hero-text {
  font-family: 'Roboto', sans-serif;
  font-size: 1.1rem;
  line-height: 1.8;
  color: #f8f9ff;
}

/* Responsive */
@media (max-width: 768px) {
  .hero-title {
    font-size: 2.2rem;
  }

  .hero-subtitle {
    font-size: 1.1rem;
  }

  .hero-text {
    font-size: 1rem;
  }
}

.hero-wave {
  position: absolute;
  left: 0;
  right: 0;
  bottom: -3px;
  width: 100%;
  line-height: 0;
}

.hero-wave svg {
  display: block;
  width: 100%;
  height: 80px;
}
</style>
