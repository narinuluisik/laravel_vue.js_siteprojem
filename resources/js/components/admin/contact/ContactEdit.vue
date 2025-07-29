<template>
  <div class="container mt-4" v-if="form">
    <h2>İletişim Bilgisi Düzenle</h2>
    <form @submit.prevent="updateContact">
      <div class="mb-3">
        <label>Adres</label>
        <input v-model="form.address" type="text" class="form-control" required />
      </div>
      <div class="mb-3">
        <label>Telefon</label>
        <input v-model="form.phone" type="text" class="form-control" required />
      </div>
      <div class="mb-3">
        <label>Email</label>
        <input v-model="form.email" type="email" class="form-control" required />
      </div>
      <div class="mb-3">
        <label>Çalışma Saatleri</label>
        <input v-model="form.working_hours" type="text" class="form-control" />
      </div>
      <div class="mb-3">
        <label>Map Embed (HTML kodu)</label>
        <textarea v-model="form.map_embed" rows="3" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Güncelle</button>
      <router-link to="/admin/contacts" class="btn btn-secondary ms-2">İptal</router-link>
    </form>
  </div>
  <div v-else class="text-center mt-4">
    <p>Yükleniyor...</p>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      form: null,
    };
  },
  created() {
    this.fetchContact();
  },
  methods: {
    async fetchContact() {
      try {
        const res = await axios.get(`/admin/contacts/${this.$route.params.id}`);
        this.form = res.data;
      } catch (error) {
        console.error('Veri alınamadı:', error);
      }
    },
    async updateContact() {
      try {
        await axios.put(`/admin/contacts/${this.$route.params.id}`, this.form);
        alert('İletişim bilgisi güncellendi.');
        this.$router.push('/admin/contacts');
      } catch (error) {
        console.error('Güncelleme sırasında hata:', error);
      }
    },
  },
};
</script>
