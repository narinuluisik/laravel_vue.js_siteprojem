<template>
  <section class="team-section" v-if="team.length">
    <div class="container text-center">
      <h2 class="section-heading fw-bold">Ekibimiz</h2>
      <div class="accent-line mx-auto"></div>
      <div class="row justify-content-center g-4 mt-4">
        <div v-for="member in team" :key="member.id" class="col-sm-6 col-md-4 col-lg-3">
          <div class="custom-card p-4 h-100 shadow-sm rounded-4 bg-white text-center">
            <img
              v-if="member.image"
              :src="member.image"
              :alt="member.name"
              class="rounded-circle mb-3"
              style="width: 120px; height: 120px; object-fit: cover;"
            />
            <div
              v-else
              class="rounded-circle bg-secondary mx-auto mb-3"
              style="width: 120px; height: 120px;"
            ></div>
            <h5 class="fw-bold text-primary mb-1">{{ member.name }}</h5>
            <p class="text-muted fst-italic mb-2">{{ member.position }}</p>
            <p class="text-secondary bio-text" v-html="formatText(member.bio)"></p>
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
.team-section {
  background: #f6f8fb;
  padding-top: 50px;
  padding-bottom: 50px;
}

.section-heading {
  font-size: 2.8rem;
  margin-bottom: 16px;
  color: #333;
}

.accent-line {
  width: 64px;
  height: 4px;
  background: #6366f1;
  border-radius: 2px;
  margin-bottom: 50px; /* boşluğu arttırdım */
}

.custom-card {
  transition: box-shadow 0.3s ease;
}

.custom-card:hover {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.bio-text {
  font-size: 0.95rem;
  line-height: 1.6;
  color: #555;
}
</style>
