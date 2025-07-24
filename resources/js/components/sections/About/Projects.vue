<template>
  <section class="projects-section">
    <h2 class="section-title">Projelerimiz</h2>

    <div class="projects-grid">
      <article
        v-for="project in projects"
        :key="project.id"
        class="project-card"
      >
        <img
          v-if="project.image"
          :src="project.image"
          :alt="project.title"
          class="project-image"
          loading="lazy"
        />
        <h3 class="project-title">{{ project.title }}</h3>
        <p class="project-desc">{{ truncateText(project.description, 150) }}</p>
        <button class="read-more-btn" @click="readMore(project.id)">
          Daha Fazla
        </button>
      </article>
    </div>
  </section>
</template>

<script>
export default {
  name: "Projects",
  props: {
    projects: {
      type: Array,
      required: true,
    },
  },
  methods: {
    truncateText(text, length) {
      if (!text) return "";
      return text.length > length ? text.substring(0, length) + "..." : text;
    },
    readMore(id) {
      alert(`Projeyi daha fazla oku: ${id}`);
    },
  },
};
</script>

<style scoped>
.projects-section {
  max-width: 1200px;
  margin: 60px auto;
  padding: 0 20px;
}

.section-title {
  text-align: center;
  font-size: 2.8rem;
  margin-bottom: 50px;
  color: #333;
}

.projects-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  justify-content: center;
}

.project-card {
  background: white;
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
  border-radius: 14px;
  width: calc(33.333% - 20px);
  display: flex;
  flex-direction: column;
  padding: 20px;
  transition: box-shadow 0.3s ease;
}

.project-card:hover {
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.project-image {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 12px;
  margin-bottom: 20px;
}

.project-title {
  font-size: 1.4rem;
  color: #1e40af; /* mavi ton */
  margin-bottom: 12px;
}

.project-desc {
  color: #555;
  flex-grow: 1;
  line-height: 1.5;
  margin-bottom: 20px;
}

.read-more-btn {
  background-color: #2563eb;
  color: white;
  border: none;
  border-radius: 8px;
  padding: 10px 18px;
  font-weight: 600;
  cursor: pointer;
  align-self: flex-start;
  transition: background-color 0.25s ease;
}

.read-more-btn:hover {
  background-color: #1e40af;
}

/* Responsive */

@media (max-width: 900px) {
  .project-card {
    width: calc(50% - 20px);
  }
}

@media (max-width: 600px) {
  .project-card {
    width: 100%;
  }
}
</style>
