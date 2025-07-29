<template>
  <div class="container mt-4">
    <h2>📩 Gelen Mesajlar</h2>

    <table class="table table-bordered mt-3">
      <thead>
        <tr>
          <th>Adı</th>
          <th>E-posta</th>
          <th>Konu</th>
          <th>Gönderim Tarihi</th>
          <th>İşlemler</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="msg in messages" :key="msg.id">
          <td>{{ msg.name }}</td>
          <td>{{ msg.email }}</td>
          <td>{{ msg.subject }}</td>
          <td>{{ formatDate(msg.created_at) }}</td>
          <td>
            <button class="btn btn-sm btn-info me-1" @click="showMessage(msg)">Detay</button>
            <button class="btn btn-sm btn-danger" @click="deleteMessage(msg.id)">Sil</button>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Mesaj Detay Modal -->
    <div class="modal" tabindex="-1" :class="{ 'show d-block': detailVisible }" style="background: rgba(0,0,0,0.5);">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Mesaj Detayı</h5>
            <button type="button" class="btn-close" @click="detailVisible = false"></button>
          </div>
          <div class="modal-body" v-if="selectedMessage">
            <p><strong>Adı:</strong> {{ selectedMessage.name }}</p>
            <p><strong>E-posta:</strong> {{ selectedMessage.email }}</p>
            <p><strong>Konu:</strong> {{ selectedMessage.subject }}</p>
            <p><strong>Mesaj:</strong></p>
            <p>{{ selectedMessage.message }}</p>
            <p><small>Gönderim Tarihi: {{ formatDate(selectedMessage.created_at) }}</small></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" @click="detailVisible = false">Kapat</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'ContactMessages',
  data() {
    return {
      messages: [],
      selectedMessage: null,
      detailVisible: false,
    };
  },
  mounted() {
    this.fetchMessages();
  },
  methods: {
    async fetchMessages() {
      try {
        const response = await axios.get('/admin/contact-messages');
        this.messages = response.data;
      } catch (error) {
        alert('Mesajlar alınırken hata oluştu.');
        console.error(error);
      }
    },
    showMessage(msg) {
      this.selectedMessage = msg;
      this.detailVisible = true;
    },
    async deleteMessage(id) {
      if (!confirm('Mesajı silmek istediğinizden emin misiniz?')) return;

      try {
        await axios.delete(`/admin/contact-messages/${id}`);
        this.messages = this.messages.filter(m => m.id !== id);
        alert('Mesaj silindi.');
      } catch (error) {
        alert('Mesaj silinirken hata oluştu.');
        console.error(error);
      }
    },
    formatDate(dateStr) {
      return new Date(dateStr).toLocaleString('tr-TR', {
        dateStyle: 'short',
        timeStyle: 'short'
      });
    }
  }
};
</script>

<style scoped>
.modal {
  transition: opacity 0.3s ease;
}
.modal.show {
  opacity: 1;
}
</style>
