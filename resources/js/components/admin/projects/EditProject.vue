<template>
  <div class="container mt-4">
    <h2>Proje Düzenleme</h2>

    <form @submit.prevent="updateProject" class="bg-white p-4 rounded shadow-sm">
      <div class="mb-3">
        <label for="title" class="form-label">Başlık</label>
        <input id="title" v-model="project.title" type="text" class="form-control" required />
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Açıklama</label>
        <textarea id="description" v-model="project.description" rows="4" class="form-control"></textarea>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Resim URL</label>
        <input id="image" v-model="project.image" type="text" class="form-control" />
        <div v-if="project.image" class="mt-2">
          <img :src="project.image.trim()" alt="Project Image" style="max-width: 200px;" />
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Güncelle</button>
      <button type="button" class="btn btn-secondary ms-2" @click="goBack">İptal</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'EditProject',
  data() {
    return {
      project: {
        title: '',
        description: '',
        image: ''
      }
    };
  },
  mounted() {
    this.fetchProject();
  },
  methods: {
    async fetchProject() {
      try {
        const id = this.$route.params.id;
        const response = await axios.get(`/admin/projects/${id}`);
        this.project = response.data;
      } catch (error) {
        console.error('Proje verisi alınamadı:', error);
        alert('Proje verisi yüklenemedi!');
      }
    },
    async updateProject() {
      try {
        const id = this.$route.params.id;
        await axios.put(`/admin/projects/${id}`, this.project);
        alert('Proje güncellendi!');
        this.$router.push('/admin/about'); // veya /admin/projects yoluna göre düzenle
      } catch (error) {
        console.error('Proje güncelleme başarısız:', error);
        alert('Güncelleme sırasında hata oluştu!');
      }
    },
    goBack() {
      this.$router.back();
    }
  }
};
</script>

<style scoped>
.container {
  max-width: 800px;
  background-color: #f8fafc;
}
</style>
