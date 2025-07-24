<template>
  <div>
    <ContactHero />
    <section class="contact-page container py-6">
      <div class="row g-4">
        <div class="col-md-5">
          <ContactInfo />
        </div>
        <div class="col-md-7">
          <ContactForm />
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import ContactHero from './ContactHero.vue'
import ContactInfo from './ContactInfo.vue'
import ContactForm from './ContactForm.vue'

export default {
  components: {
    ContactHero,
    ContactInfo,
    ContactForm
  }
}
</script>
