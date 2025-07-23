<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="/">NarSoft</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center gap-3">
          <li class="nav-item">
            <a class="nav-link" href="/">Anasayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/hakkimizda">Hakkımızda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/iletisim">İletişim</a>
          </li>
          <li class="nav-item">
            <a href="/admin/login" class="btn btn-outline-primary px-3 py-2">
              Yönetim Girişi
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: "Navbar",
};
</script>

<style scoped>
.navbar-nav .nav-link {
  color: #232946;
  font-weight: 600;
}

.navbar-nav .nav-link:hover {
  color: #6366f1;
  text-decoration: underline;
}
</style>
