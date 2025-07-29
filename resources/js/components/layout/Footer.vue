<template>
  <footer :style="footerStyle" class="py-5 mt-5 text-center text-white">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-4 mb-3 mb-md-0">
          <h5 class="fw-bold mb-3">İletişim</h5>
          <p>Adres: İstanbul, Türkiye</p>
          <p>Telefon: +90 555 123 45 67</p>
          <p>Email: info@narsoft.com</p>
        </div>
        <div class="col-md-4 mb-3 mb-md-0">
          <h5 class="fw-bold mb-3">Hızlı Linkler</h5>
          <ul class="list-unstyled">
            <li><a href="/" class="text-white text-decoration-none">Anasayfa</a></li>
            <li><a href="/hakkimizda" class="text-white text-decoration-none">Hakkımızda</a></li>
            <li><a href="/iletisim" class="text-white text-decoration-none">İletişim</a></li>
            
          </ul>
        </div>
      </div>

      <p class="mb-0">&copy; 2025 NarSoft. Tüm hakları saklıdır.</p>
      <small>Web geliştirme ve dijital çözümler</small>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",
  computed: {
    footerStyle() {
      return {
        background:
          "linear-gradient(120deg, #2E2F4F 0%, #3B3D80 100%)", 
      };
    },
  },
};
</script>

<style scoped>
footer {
  font-weight: 500;
}
a:hover {
  text-decoration: underline;
}
</style>
