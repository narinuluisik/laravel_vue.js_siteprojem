<template>
  <div>
    <!-- İletişim Bilgileri Sayfası -->
    <div class="contact-info p-4 bg-white rounded shadow-sm" style="margin-top: 100px;">
      <section class="map-section" style="padding: 50px 0; text-align: center; background-color: #f6f8fb;">
        <div class="map-container" style="width: 100%; height: 400px; max-width: 100%; overflow: hidden; border-radius: 8px; margin: 0 auto;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12040.930195867735!2d28.923564261609148!3d41.020167991578035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caba24d6100395%3A0x811964fd77247ad6!2zRmF0aWgsIFRvcGthcMSxLCAzNDA5MyBGYXRpaC_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1753431015587!5m2!1str!2str"
            width="100%" height="100%" style="border: 0;" allowfullscreen="" loading="lazy"
          ></iframe>
        </div>
      </section>
      <p><strong>Adres:</strong> {{ contact.address || 'Adres bilgisi bulunamadı' }}</p>
      <p><strong>Telefon:</strong> {{ contact.phone || 'Telefon bilgisi bulunamadı' }}</p>
      <p><strong>Email:</strong> {{ contact.email || 'Email bilgisi bulunamadı' }}</p>
    </div>
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
  font-size: 1.1rem;
  color: #555;
}
</style>
