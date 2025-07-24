<template>
  <section class="vision-mission-section">
    <div class="container">
      <div class="row justify-content-center g-4">
        <div v-if="vision" class="col-md-6 col-lg-5">
          <div class="card-box vision">
            <h4 class="section-title text-primary">Vizyonumuz</h4>
            <p class="section-text" v-html="formatText(vision)"></p>
          </div>
        </div>
        <div v-if="mission" class="col-md-6 col-lg-5">
          <div class="card-box mission">
            <h4 class="section-title text-success">Misyonumuz</h4>
            <p class="section-text" v-html="formatText(mission)"></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: {
    vision: String,
    mission: String
  },
  methods: {
    formatText(text) {
      return text ? text.replace(/\n/g, '<br>') : ''
    }
  }
}
</script>

<style scoped>
.vision-mission-section {
  background: #f6f8fb;
  padding: 80px 0; /* Üst ve alt boşluk artırıldı */
}

.card-box {
  background-color: #ffffff;
  border-radius: 16px;
  padding: 32px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
  text-align: center;
  height: 100%;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-box:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 32px rgba(0, 0, 0, 0.1);
}

.section-title {
  font-size: 1.8rem;
  font-weight: 600;
  margin-bottom: 16px;
}

.section-text {
  font-size: 1.05rem;
  line-height: 1.7;
  color: #555;
}
</style>
