<template>
  <div class="container mt-4">
    <h2>Yeni İletişim Bilgisi Ekle</h2>
    <form @submit.prevent="createContact">
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
      <button type="submit" class="btn btn-success">Kaydet</button>
      <router-link to="/admin/contacts" class="btn btn-secondary ms-2">İptal</router-link>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      form: {
        address: '',
        phone: '',
        email: '',
        working_hours: '',
        map_embed: '',
      },
    };
  },
  methods: {
    async createContact() {
      try {
        await axios.post('/admin/contacts', this.form);
        alert('İletişim bilgisi kaydedildi.');
        this.$router.push('/admin/contacts');
      } catch (error) {
        console.error('Kayıt sırasında hata:', error);
      }
    },
  },
};
</script>
