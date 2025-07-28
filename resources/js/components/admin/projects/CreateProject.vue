<template>
  <div class="container mt-4">
    <h2>Yeni Proje Ekle</h2>

    <form @submit.prevent="createProject" class="bg-white p-4 rounded shadow-sm">
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

      <button type="submit" class="btn btn-success">Ekle</button>
      <button type="button" class="btn btn-secondary ms-2" @click="goBack">İptal</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'CreateProject',
  data() {
    return {
      project: {
        title: '',
        description: '',
        image: ''
      }
    };
  },
  methods: {
    async createProject() {
      try {
        await axios.post('/admin/projects', this.project);
        alert('Proje başarıyla eklendi!');
        this.$router.push('/admin/about'); // veya /admin/projects sayfası
      } catch (error) {
        console.error('Proje eklenirken hata:', error);
        alert('Proje ekleme başarısız oldu!');
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
