<template>
  <div class="container mt-4">
    <h2>Hakkımızda Düzenleme</h2>

    <form @submit.prevent="updateAboutUs" class="bg-white p-4 rounded shadow-sm">
      <div class="mb-3">
        <label for="title" class="form-label">Başlık</label>
        <input id="title" v-model="aboutUs.title" type="text" class="form-control" required />
      </div>

      <div class="mb-3">
        <label for="sub_title" class="form-label">Alt Başlık</label>
        <input id="sub_title" v-model="aboutUs.sub_title" type="text" class="form-control" />
      </div>

      <div class="mb-3">
        <label for="content" class="form-label">İçerik</label>
        <textarea id="content" v-model="aboutUs.content" rows="5" class="form-control"></textarea>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Resim URL</label>
        <input id="image" v-model="aboutUs.image" type="text" class="form-control" />
        <div v-if="aboutUs.image" class="mt-2">
          <img :src="aboutUs.image.trim()" alt="About Us Image" style="max-width: 200px;" />
        </div>
      </div>

      <div class="mb-3">
        <label for="misyon" class="form-label">Misyon</label>
        <textarea id="misyon" v-model="aboutUs.misyon" rows="3" class="form-control"></textarea>
      </div>

      <div class="mb-3">
        <label for="vizyon" class="form-label">Vizyon</label>
        <textarea id="vizyon" v-model="aboutUs.visyon" rows="3" class="form-control"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Güncelle</button>
      <button type="button" class="btn btn-secondary ms-2" @click="goBack">İptal</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'EditAboutUs',
  data() {
    return {
      aboutUs: {
        title: '',
        sub_title: '',
        content: '',
        image: '',
        misyon: '',
        visyon: ''
      }
    };
  },
  mounted() {
    this.fetchAboutUs();
  },
  methods: {
    async fetchAboutUs() {
      try {
        const id = this.$route.params.id;
        const response = await axios.get(`/admin/aboutus/${id}`);
        this.aboutUs = response.data;
      } catch (error) {
        console.error('Veri alınırken hata oluştu:', error);
        alert('Veri yüklenemedi!');
      }
    },
    async updateAboutUs() {
      try {
        const id = this.$route.params.id;
        await axios.put(`/admin/aboutus/${id}`, this.aboutUs);
        alert('Hakkımızda bilgileri güncellendi!');
        this.$router.push('/admin/about');
      } catch (error) {
        console.error('Güncelleme sırasında hata:', error);
        alert('Güncelleme başarısız oldu!');
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
