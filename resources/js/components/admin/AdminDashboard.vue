<template>
  <div class="dashboard p-4">
    <h2 class="welcome-message mb-4">Hoşgeldiniz, Yönetim Paneline!</h2>

    <h1 class="dashboard-title mb-3">Admin Dashboard</h1>
    <p class="dashboard-subtitle mb-5">
      Projenizin genel durumu ve kullanıcı istatistiklerine buradan ulaşabilirsiniz.
    </p>

    <div class="stats-cards d-flex gap-4 mb-5 flex-wrap">
      <div class="card stat-card p-4 shadow rounded">
        <h3 class="stat-number">{{ projectsCount }}</h3>
        <p class="stat-label">Projeler</p>
      </div>
      <div class="card stat-card p-4 shadow rounded">
        <h3 class="stat-number">{{ usersCount }}</h3>
        <p class="stat-label">Kullanıcılar</p>
      </div>
      <div class="card stat-card p-4 shadow rounded">
        <h3 class="stat-number">{{ ticketsCount }}</h3>
        <p class="stat-label">Destek Talepleri</p>
      </div>
    </div>

    <div class="charts bg-white rounded shadow-sm p-4">
      <h2 class="chart-title mb-3">Son 7 Gün Ziyaretçi Grafiği</h2>
      <div class="chart-placeholder text-muted">
        Grafik burada olacak...
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AdminDashboard',
  data() {
    return {
      projectsCount: 24, // Örnek veri, backend'den dinamik olabilir
      usersCount: 128,
      ticketsCount: 5,
    };
  },
};
</script>

<style scoped>
.dashboard {
  font-family: 'Inter', sans-serif;
  color: #374151;
}

.welcome-message {
  font-size: 1.6rem;
  font-weight: 600;
  color: #4a90e2;
}

.dashboard-title {
  font-weight: 700;
  color: #111827;
}

.dashboard-subtitle {
  font-size: 1rem;
  color: #6b7280;
}

.stats-cards {
  gap: 1.5rem;
}

.stat-card {
  flex: 1 1 200px;
  background-color: #f9fafb;
  text-align: center;
}

.stat-number {
  font-size: 2.5rem;
  font-weight: 700;
  color: #2563eb;
}

.stat-label {
  font-size: 1rem;
  margin-top: 0.25rem;
  color: #6b7280;
}

.charts {
  margin-top: 2rem;
}

.chart-title {
  font-weight: 600;
  color: #374151;
}

.chart-placeholder {
  border: 2px dashed #d1d5db;
  height: 200px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 8px;
  font-style: italic;
}
</style>
