<template>
  <section class="hero-section">
    <div class="container text-center">
      <h1 class="hero-title">Dijital Dönüşümde Gücünüz NarSoft</h1>
      <p class="hero-subtitle">Yenilikçi yazılım çözümleriyle işinizi geleceğe taşıyın.</p>
      <div class="cta-buttons">
        <a href="#services" class="btn btn-primary">Hizmetleri Keşfedin</a>
        <a href="#projects" class="btn btn-outline-light">Projelerimizi İnceleyin</a>
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

<style scoped>
.hero-section {
  min-height: 75vh; /* biraz küçültüldü */
  background: linear-gradient(135deg, #6C63FF, #3B3D80);
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 120px 20px 100px 20px; /* daha az dikey boşluk */
  position: relative;
  overflow: hidden;
  border-bottom-left-radius: 60px;
  border-bottom-right-radius: 60px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.hero-title {
  font-size: 3rem; /* bir tık küçüldü */
  font-weight: 800;
  margin-bottom: 20px;
  font-family: 'Montserrat', sans-serif;
  animation: fadeInUp 1.5s ease-out;
}

.hero-subtitle {
  font-size: 1.3rem;
  color: #E0E7FF;
  margin-bottom: 35px;
  font-family: 'Roboto', sans-serif;
  animation: fadeInUp 1.5s ease-out 0.5s;
}

.cta-buttons {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}

.btn {
  padding: 14px 40px;
  border-radius: 30px;
  font-size: 1.1rem;
  font-weight: 500;
  transition: all 0.3s ease;
  text-decoration: none;
}

.btn-primary {
  background-color: #ffffff;
  color: #6C63FF;
  border: none;
}

.btn-primary:hover {
  background-color: #f1f1f1;
  color: #3B3D80;
}

.btn-outline-light {
  background-color: transparent;
  color: white;
  border: 2px solid white;
}

.btn-outline-light:hover {
  background-color: white;
  color: #6C63FF;
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

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@media (max-width: 768px) {
  .hero-title {
    font-size: 2.2rem;
  }

  .hero-subtitle {
    font-size: 1.1rem;
  }

  .btn {
    padding: 12px 30px;
    font-size: 1rem;
  }
}
</style>
