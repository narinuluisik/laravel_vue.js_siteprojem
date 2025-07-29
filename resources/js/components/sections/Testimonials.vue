<template>
  <section class="testimonials-section py-6" style="background: #f6f8fb; padding-top: 100px; padding-bottom: 100px;">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="section-heading fw-bold" style="font-size:2.4rem; color:#232946; letter-spacing:-1px;">
            Müşteri Yorumları
          </h2>
          <div
            style="width:48px;height:3px;background:#6366F1;margin:14px auto 0;border-radius:2px;"
          ></div>
        </div>
      </div>
      <div class="testimonials-scroll" style="overflow:hidden;">
        <div class="testimonials-track d-flex flex-row gap-3 pb-2" style="scroll-behavior:smooth;">
          <div
            v-for="(testimonial, index) in testimonials"
            :key="index"
            class="testimonial-slide flex-shrink-0 px-3 py-4 bg-white rounded-4 shadow-sm text-center"
            style="min-width:260px; max-width:320px;"
          >
            <p class="quote mb-3 fs-6 fst-italic" style="color:#232946;">
              "{{ testimonial.message }}"
            </p>
            <div class="author text-primary fw-bold small">
              — {{ testimonial.author }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'TestimonialsSection',
  data() {
    return {
      testimonials: [
        {
          message: 'NarSoft ile çalışmak büyük bir keyifti. Projemiz tam zamanında teslim edildi.',
          author: 'Bengüsu Duman',
        },
        {
          message: 'Profesyonel ve hızlı destekleri için teşekkür ederiz.',
          author: 'Tuğçe Özturaç',
        },
        {
          message: 'İş süreçlerimiz NarSoft sayesinde dijitalleşti ve çok daha verimli hale geldi.',
          author: 'Serife Ocak',
        },
      ],
    };
  },
};
</script>

<style scoped>
.testimonials-scroll::-webkit-scrollbar {
  display: none;
}
.testimonials-scroll {
  -ms-overflow-style: none;
  scrollbar-width: none;
}

.testimonials-track {
  scroll-behavior: smooth;
  justify-content: center;
}

.section-heading {
  margin-top: 2rem;
}

/* Alternatif olarak section içindeki boşlukları CSS ile de kontrol edebilirsin: */
.testimonials-section {
  /* padding-top ve padding-bottom ile oynayabilirsin */
  padding-top: 100px;
  padding-bottom: 100px;
}
</style>
