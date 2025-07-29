<template>
  <section class="vision-mission-section">
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div v-if="vision" class="col-md-6">
          <div class="info-card vision">
            <div class="icon-wrapper bg-primary">
              <i class="fas fa-eye"></i>
            </div>
            <h4 class="card-title text-primary">Vizyonumuz</h4>
            <p class="card-text" v-html="formatText(vision)"></p>
          </div>
        </div>
        <div v-if="mission" class="col-md-6">
          <div class="info-card mission">
            <div class="icon-wrapper bg-success">
              <i class="fas fa-bullseye"></i>
            </div>
            <h4 class="card-title text-success">Misyonumuz</h4>
            <p class="card-text" v-html="formatText(mission)"></p>
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
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

.vision-mission-section {
  background: #f5f7fa;
  padding: 80px 0;
}

.info-card {
  background: white;
  border-radius: 16px;
  padding: 40px 30px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative;
}

.info-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 32px rgba(0, 0, 0, 0.12);
}

.icon-wrapper {
  width: 64px;
  height: 64px;
  margin: 0 auto 20px;
  border-radius: 50%;
  color: white;
  font-size: 28px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 16px rgba(0,0,0,0.1);
}

.card-title {
  font-size: 1.6rem;
  font-weight: 600;
  margin-bottom: 16px;
}

.card-text {
  font-size: 1.05rem;
  line-height: 1.8;
  color: #555;
}
</style>
