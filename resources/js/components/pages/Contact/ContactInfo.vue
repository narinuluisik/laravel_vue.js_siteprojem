<template>
  <div class="contact-info p-4 bg-white rounded shadow-sm">
    <h3 class="mb-3 text-primary fw-bold">İletişim Bilgileri</h3>
    <p><strong>Adres:</strong> {{ contact.address || 'Adres bilgisi bulunamadı' }}</p>
    <p><strong>Telefon:</strong> {{ contact.phone || 'Telefon bilgisi bulunamadı' }}</p>
    <p><strong>Email:</strong> {{ contact.email || 'Email bilgisi bulunamadı' }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      contact: {}
    }
  },
  mounted() {
    fetch('/api/contact-info')
      .then(res => res.json())
      .then(data => {
        this.contact = data
      })
      .catch(() => {
        this.contact = {}
      })
  }
}
</script>

<style scoped>
.contact-info p {
  font-size: 1rem;
  color: #555;
}
</style>
