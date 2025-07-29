<template>
  <section class="projects-section">
    <h2 class="section-title">Projelerimiz</h2>
    <div class="projects-grid">
      <article
        v-for="project in projects"
        :key="project.id"
        class="project-card"
        @click="readMore(project.id)"
      >
        <div class="image-container">
          <img
            v-if="project.image"
            :src="project.image"
            :alt="project.title"
            class="project-image"
            loading="lazy"
          />
          <div class="overlay"></div>
        </div>
        <div class="content">
          <h3 class="project-title">{{ project.title }}</h3>
          <p class="project-desc">{{ truncateText(project.description, 150) }}</p>
          <div class="tags" v-if="project.tags">
            <span class="tag" v-for="(tag, index) in project.tags" :key="index">{{ tag }}</span>
          </div>
        </div>
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
  max-width: 1400px;
  margin: 80px auto;
  padding: 0 20px;
}

.section-title {
  text-align: center;
  font-size: 2.8rem;
  margin-bottom: 60px;
  color: #2d3748;
  font-weight: 700;
  position: relative;
}

.section-title::after {
  content: '';
  display: block;
  width: 80px;
  height: 4px;
  background: linear-gradient(90deg, #4f46e5, #10b981);
  margin: 15px auto 0;
  border-radius: 2px;
}

.projects-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
  gap: 30px;
}

.project-card {
  background: white;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  cursor: pointer;
  display: flex;
  flex-direction: column;
}

.project-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}

.image-container {
  position: relative;
  width: 100%;
  height: 200px;
  overflow: hidden;
}

.project-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to top, rgba(0,0,0,0.3), transparent 40%);
}

.project-card:hover .project-image {
  transform: scale(1.05);
}

.content {
  padding: 24px;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
}

.project-title {
  font-size: 1.5rem;
  color: #2d3748;
  margin-bottom: 12px;
  font-weight: 600;
}

.project-desc {
  color: #4a5568;
  line-height: 1.6;
  margin-bottom: 20px;
  flex-grow: 1;
}

.tags {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-top: auto;
}

.tag {
  background: #edf2f7;
  color: #4a5568;
  padding: 4px 12px;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: 500;
}

/* Responsive */
@media (max-width: 1024px) {
  .projects-grid {
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  }
}

@media (max-width: 768px) {
  .section-title {
    font-size: 2.2rem;
    margin-bottom: 40px;
  }
  
  .projects-grid {
    gap: 20px;
  }
}

@media (max-width: 480px) {
  .projects-grid {
    grid-template-columns: 1fr;
  }
  
  .section-title {
    font-size: 1.8rem;
  }
}
</style>