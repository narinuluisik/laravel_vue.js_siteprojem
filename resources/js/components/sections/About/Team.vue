<template>
  <section class="team-section" v-if="team.length">
    <div class="container text-center">
      <h2 class="section-heading fw-bold">Ekibimiz</h2>
      <div class="accent-line mx-auto"></div>

      <div class="row justify-content-center g-4 mt-4">
        <div
          v-for="member in team"
          :key="member.id"
          class="col-sm-6 col-md-4 col-lg-3"
        >
          <div class="team-card shadow-sm h-100 p-4 text-center rounded-4 bg-white">
            <div class="team-avatar mb-3">
              <img
                v-if="member.image"
                :src="member.image"
                :alt="member.name"
                class="rounded-circle"
              />
              <div v-else class="avatar-placeholder rounded-circle">
                <i class="fas fa-user text-white fa-2x"></i>
              </div>
            </div>

            <h5 class="fw-bold text-primary mb-1">{{ member.name }}</h5>
            <p class="text-muted fst-italic mb-2">{{ member.position }}</p>
            <p class="bio-text text-secondary" v-html="formatText(member.bio)"></p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: {
    team: {
      type: Array,
      required: true,
    },
  },
  methods: {
    formatText(text) {
      return text ? text.replace(/\n/g, "<br>") : "";
    },
  },
};
</script>

<style scoped>
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

.team-section {
  background: #f6f8fb;
  padding: 60px 0;
}

.section-heading {
  font-size: 2.6rem;
  color: #333;
  margin-bottom: 16px;
}

.accent-line {
  width: 64px;
  height: 4px;
  background: #6366f1;
  border-radius: 2px;
  margin: 0 auto 40px;
}

.team-card {
  border: none;
  background: #fff;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.team-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 16px 24px rgba(0, 0, 0, 0.08);
}

.team-avatar img {
  width: 120px;
  height: 120px;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}

.avatar-placeholder {
  width: 120px;
  height: 120px;
  background-color: #9ca3af;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}

.bio-text {
  font-size: 0.95rem;
  line-height: 1.6;
  color: #555;
  margin-top: 12px;
}
</style>
