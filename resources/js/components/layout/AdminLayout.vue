<template>
  <div class="admin-layout">
    <!-- Navbar -->
    <nav class="navbar px-4">
      <span class="navbar-brand mb-0">🛠️ Admin Paneli</span>
    </nav>

    <!-- Ana Gövde -->
    <div class="main-wrapper d-flex">
      <!-- Sidebar -->
    <aside class="sidebar">
  <ul class="nav flex-column px-3 py-4">
    <li class="nav-item mb-2">
      <router-link to="/admin/dashboard" class="nav-link" active-class="active-link">
        <span class="icon">📊</span> Dashboard
      </router-link>
    </li>
    <li class="nav-item mb-2">
      <router-link to="/admin/about" class="nav-link" active-class="active-link">
        <span class="icon">ℹ️</span> Hakkımızda
      </router-link>
    </li>
  </ul>
</aside>

      <!-- İçerik + Footer -->
      <div class="content-wrapper d-flex flex-column flex-grow-1">
        <main class="content flex-grow-1 p-4">
         <router-view />
        </main>

        <footer class="footer text-center">
          © 2025 Senin Şirketin
        </footer>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AdminLayout',
};
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

* {
  font-family: 'Inter', sans-serif;
}

.admin-layout {
  display: flex;
  flex-direction: column;
  height: 100vh;
  background-color: #f3f4f6;
}

/* Navbar */
.navbar {
  background-color: #ffffff;
  color: #111827;
  height: 56px;
  display: flex;
  align-items: center;
  font-weight: 600;
  font-size: 1.1rem;
  border-bottom: 1px solid #e5e7eb;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03);
}

/* Ana alan */
.main-wrapper {
  flex: 1;
  overflow: hidden;
}

/* Sidebar */
.sidebar {
  background-color: #1f2937;
  width: 240px;
  color: #d1d5db;
  display: flex;
  flex-direction: column;
  flex-shrink: 0;
  box-shadow: 2px 0 5px rgba(0, 0, 0, 0.05);
}

.sidebar .nav-link {
  color: #d1d5db;
  padding: 10px 15px;
  border-radius: 6px;
  font-weight: 500;
  transition: all 0.2s ease;
  display: flex;
  align-items: center;
  gap: 8px;
}

.sidebar .nav-link:hover {
  background-color: #374151;
  color: #ffffff;
}

.sidebar .active-link {
  background-color: #4b5563;
  color: #ffffff;
  font-weight: 600;
}

/* Content */
.content-wrapper {
  display: flex;
  flex-direction: column;
  height: calc(100vh - 56px);
  overflow: hidden;
  background-color: #f9fafb;
}

.content {
  overflow-y: auto;
}

/* Footer */
.footer {
  background-color: #ffffff;
  color: #6b7280;
  font-size: 0.9rem;
  height: 48px;
  border-top: 1px solid #e5e7eb;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
