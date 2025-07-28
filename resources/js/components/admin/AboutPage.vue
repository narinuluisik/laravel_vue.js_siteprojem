<template>
  <div class="container mt-4">
    <!-- Hakkımızda Başlığı -->
    <section class="my-4 p-3 bg-white rounded shadow-sm">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>📌 Biz Kimiz</h4>
      </div>

      <table class="table table-bordered table-hover" v-if="aboutUs && Object.keys(aboutUs).length">
        <thead>
          <tr>
            <th>Başlık</th>
            <th>Alt Başlık</th>
            <th>İçerik</th>
            <th>Misyon</th>
            <th>Vizyon</th>
            <th>Görsel</th>
            <th>İşlemler</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ aboutUs.title }}</td>
            <td>{{ aboutUs.sub_title }}</td>
            <td v-html="aboutUs.content"></td>
            <td>{{ aboutUs.misyon }}</td>
            <td>{{ aboutUs.visyon }}</td>
            <td>
              <img v-if="aboutUs.image" :src="aboutUs.image.trim()" alt="About Image" style="max-width: 100px;" />
            </td>
            <td>
              <button class="btn btn-sm btn-primary me-2" @click="goToEditAbout(aboutUs.id)">Düzenle</button>
              <button class="btn btn-sm btn-danger" @click="deleteAbout(aboutUs.id)">Sil</button>
            </td>
          </tr>
        </tbody>
      </table>

      <div v-else class="text-muted">Hakkımızda verisi bulunamadı.</div>
    </section>

    <!-- Projeler Tablosu -->
    <section class="my-4 p-3 bg-white rounded shadow-sm">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>📁 Projelerimiz</h4>
        <router-link to="/admin/projects/create" class="btn btn-success btn-sm">+ Yeni Ekle</router-link>
      </div>

      <table class="table table-bordered table-hover" v-if="projects.length">
        <thead>
          <tr>
            <th>Proje Adı</th>
            <th>Açıklama</th>
            <th>İşlemler</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="project in projects" :key="project.id">
            <td>{{ project.title }}</td>
            <td>{{ project.description }}</td>
            <td>
              <router-link :to="`/admin/projects/edit/${project.id}`" class="btn btn-sm btn-primary me-2">Düzenle</router-link>
              <button class="btn btn-sm btn-danger" @click="deleteProject(project.id)">Sil</button>
            </td>
          </tr>
        </tbody>
      </table>

      <div v-else class="text-muted">Proje verisi bulunamadı.</div>
    </section>

    <!-- Takım Üyeleri Tablosu -->
    <section class="my-4 p-3 bg-white rounded shadow-sm">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>👨‍💻 Takım Üyeleri</h4>
        <router-link to="/admin/team-members/create" class="btn btn-success btn-sm">+ Yeni Ekle</router-link>
      </div>

      <table class="table table-bordered table-hover" v-if="teamMembers.length">
        <thead>
          <tr>
            <th>Ad Soyad</th>
            <th>Görev</th>
            <th>Açıklama</th>
            <th>İşlemler</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="member in teamMembers" :key="member.id">
            <td>{{ member.name }}</td>
            <td>{{ member.role }}</td>
               <td>{{ member.bio }}</td>
            <td>
              <router-link :to="`/admin/team-members/edit/${member.id}`" class="btn btn-sm btn-primary me-2">Düzenle</router-link>
              <button class="btn btn-sm btn-danger" @click="deleteTeamMember(member.id)">Sil</button>
            </td>
          </tr>
        </tbody>
      </table>

      <div v-else class="text-muted">Takım üyesi verisi bulunamadı.</div>
    </section>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'AboutPage',
  data() {
    return {
      aboutUs: {},
      projects: [],
      teamMembers: []
    };
  },
  methods: {
    async getAllData() {
      try {
        const response = await axios.get('/admin/aboutpage');
        this.aboutUs = response.data.about_us || {};
        this.projects = response.data.projects || [];
        this.teamMembers = response.data.team_members || [];
      } catch (error) {
        console.error('Veriler alınamadı:', error);
      }
    },
    goToEditAbout(id) {
      this.$router.push(`/admin/aboutus/edit/${id}`);
    },
    async deleteAbout(id) {
      if (confirm('Hakkımızda verisini silmek istediğinize emin misiniz?')) {
        try {
          await axios.delete(`/admin/aboutus/${id}`);
          this.getAllData();
        } catch (error) {
          console.error('Silme hatası:', error);
        }
      }
    },
    async deleteProject(id) {
      if (confirm('Bu projeyi silmek istediğinize emin misiniz?')) {
        try {
          await axios.delete(`/admin/projects/${id}`);
          this.getAllData();
        } catch (error) {
          console.error('Proje silinirken hata oluştu:', error);
        }
      }
    },
    async deleteTeamMember(id) {
      if (confirm('Bu takım üyesini silmek istediğinize emin misiniz?')) {
        try {
          await axios.delete(`/admin/team-members/${id}`);
          this.getAllData();
        } catch (error) {
          console.error('Takım üyesi silinirken hata oluştu:', error);
        }
      }
    }
  },
  mounted() {
    this.getAllData();
  }
};
</script>

<style scoped>
img {
  border-radius: 4px;
}
</style>
