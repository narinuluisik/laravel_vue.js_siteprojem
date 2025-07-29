<template>
  <div class="container mt-4">
    <h2>İletişim Bilgileri</h2>

    <router-link to="/admin/contacts/create" class="btn btn-primary mb-3">Yeni İletişim Ekle</router-link>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Adres</th>
          <th>Telefon</th>
          <th>Email</th>
          <th>Çalışma Saatleri</th>
          <th>İşlemler</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="contact in contacts" :key="contact.id">
          <td>{{ contact.address }}</td>
          <td>{{ contact.phone }}</td>
          <td>{{ contact.email }}</td>
          <td>{{ contact.working_hours }}</td>
          <td>
            <router-link :to="`/admin/contacts/edit/${contact.id}`" class="btn btn-sm btn-warning">Düzenle</router-link>
            <button class="btn btn-sm btn-danger" @click="deleteContact(contact.id)">Sil</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      contacts: [],
    };
  },
  created() {
    this.fetchContacts();
  },
  methods: {
    async fetchContacts() {
      try {
        const res = await axios.get('/admin/contacts');
        this.contacts = res.data;
      } catch (error) {
        console.error('İletişim bilgileri alınamadı:', error);
      }
    },
    async deleteContact(id) {
      if (!confirm('Silmek istediğinize emin misiniz?')) return;

      try {
        await axios.delete(`/admin/contacts/${id}`);
        alert('İletişim bilgisi silindi.');
        this.fetchContacts();
      } catch (error) {
        console.error('Silme sırasında hata:', error);
      }
    },
  },
};
</script>
