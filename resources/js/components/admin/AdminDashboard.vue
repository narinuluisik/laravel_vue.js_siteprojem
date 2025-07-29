<template>
  <div class="dashboard p-4">
    <h2 class="welcome-message mb-4">Hoşgeldiniz, Yönetim Paneline!</h2>

    <h1 class="dashboard-title mb-3">Admin Dashboard</h1>
    <p class="dashboard-subtitle mb-4">
      Projenizin genel durumu ve yönetim istatistiklerine buradan ulaşabilirsiniz.
    </p>

    <div class="stats-cards d-flex gap-4 mb-5 flex-wrap">
      <div class="card stat-card p-4 shadow rounded">
        <h3 class="stat-number">{{ projectsCount }}</h3>
        <p class="stat-label">Projeler</p>
      </div>
      <div class="card stat-card p-4 shadow rounded">
        <h3 class="stat-number">{{ teamMembersCount }}</h3>
        <p class="stat-label">Takım Üyeleri</p>
      </div>
      <div class="card stat-card p-4 shadow rounded">
        <h3 class="stat-number">{{ contactMessagesCount }}</h3>
        <p class="stat-label">Gelen Mesajlar</p>
      </div>
    </div>

    <div class="projects-section bg-white rounded shadow-sm p-4">
      <h4 class="section-title mb-3">Son Projelerimiz</h4>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Başlık</th>
            <th>Açıklama</th>
            <th>Görsel</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="project in recentProjects" :key="project.id">
            <td>{{ project.title }}</td>
            <td>{{ project.description.length > 80 ? project.description.slice(0, 80) + '...' : project.description }}</td>
            <td>
              <img
                v-if="project.image"
                :src="project.image.trim()"
                alt="Proje Görseli"
                class="project-image"
              />
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'AdminDashboard',
  data() {
    return {
      projectsCount: 0,
      teamMembersCount: 0,
      contactMessagesCount: 0,
      recentProjects: [],
    };
  },
  mounted() {
    this.fetchStats();
  },
  methods: {
    async fetchStats() {
      try {
        const projectsRes = await axios.get('/admin/projects');
        this.projectsCount = projectsRes.data.length;
        this.recentProjects = projectsRes.data.slice(-2).reverse();

        const teamRes = await axios.get('/admin/team-members');
        this.teamMembersCount = teamRes.data.length;

        const messagesRes = await axios.get('/admin/contact-messages');
        this.contactMessagesCount = messagesRes.data.length;
      } catch (error) {
        console.error('İstatistikler yüklenirken hata:', error);
      }
    },
  },
};
</script>

<style scoped>
.dashboard {
  font-family: 'Inter', sans-serif;
  color: #374151;
}

.welcome-message {
  font-size: 1.5rem;
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
  flex: 1 1 180px;
  background-color: #f9fafb;
  text-align: center;
}

.stat-number {
  font-size: 2rem;
  font-weight: 700;
  color: #2563eb;
}

.stat-label {
  font-size: 1rem;
  margin-top: 0.25rem;
  color: #6b7280;
}

.projects-section {
  margin-top: 2rem;
}

.section-title {
  font-weight: 600;
  color: #374151;
}

.table {
  width: 100%;
  border-collapse: collapse;
}

.table thead tr {
  background-color: #f3f4f6;
}

.table th, .table td {
  padding: 12px 15px;
  border: 1px solid #e5e7eb;
  vertical-align: middle;
}

.project-image {
  max-width: 100px;
  max-height: 60px;
  object-fit: cover;
  border-radius: 4px;
}
</style>
