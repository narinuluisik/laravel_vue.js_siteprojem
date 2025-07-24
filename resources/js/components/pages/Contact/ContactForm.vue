<template>
  <form @submit.prevent="submitForm" class="contact-form p-4 bg-white rounded shadow-sm">
    <h3 class="mb-3 text-success fw-bold">Bize Ulaşın</h3>

    <div class="mb-3">
      <label for="name" class="form-label">Adınız</label>
      <input type="text" id="name" v-model="form.name" class="form-control" :class="{'is-invalid': errors.name}" />
      <div class="invalid-feedback" v-if="errors.name">{{ errors.name[0] }}</div>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" id="email" v-model="form.email" class="form-control" :class="{'is-invalid': errors.email}" />
      <div class="invalid-feedback" v-if="errors.email">{{ errors.email[0] }}</div>
    </div>

    <div class="mb-3">
      <label for="subject" class="form-label">Konu (Opsiyonel)</label>
      <input type="text" id="subject" v-model="form.subject" class="form-control" :class="{'is-invalid': errors.subject}" />
      <div class="invalid-feedback" v-if="errors.subject">{{ errors.subject[0] }}</div>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Mesajınız</label>
      <textarea id="message" v-model="form.message" rows="5" class="form-control" :class="{'is-invalid': errors.message}"></textarea>
      <div class="invalid-feedback" v-if="errors.message">{{ errors.message[0] }}</div>
    </div>

    <button type="submit" class="btn btn-success" :disabled="loading">
      {{ loading ? 'Gönderiliyor...' : 'Gönder' }}
    </button>

    <div v-if="successMessage" class="alert alert-success mt-3">
      {{ successMessage }}
    </div>
  </form>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: '',
        email: '',
        subject: '',
        message: ''
      },
      errors: {},
      successMessage: '',
      loading: false
    }
  },
  methods: {
    submitForm() {
      this.loading = true
      this.errors = {}
      this.successMessage = ''

      fetch('/api/send-message', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(this.form)
      })
      .then(async res => {
        this.loading = false
        if (!res.ok) {
          const errorData = await res.json()
          this.errors = errorData.errors || {}
          return
        }
        this.successMessage = 'Mesajınız başarıyla gönderildi.'
        this.form = { name: '', email: '', subject: '', message: '' }
      })
      .catch(() => {
        this.loading = false
        this.errors = { general: ['Bir hata oluştu. Lütfen tekrar deneyin.'] }
      })
    }
  }
}
</script>

<style scoped>
.contact-form .form-label {
  font-weight: 600;
}
</style>
