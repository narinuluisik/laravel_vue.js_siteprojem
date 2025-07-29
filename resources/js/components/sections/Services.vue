<template>
  <section class="services-section">
    <div class="container">
      <h2 class="section-title">Hizmetlerimiz</h2>
      <div class="services-grid">
        <div
          v-for="(service, index) in services"
          :key="index"
          class="service-card"
        >
          <div class="icon-circle" v-html="service.icon"></div>
          <h3>{{ service.title }}</h3>
          <p>{{ service.description }}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "ServicesSection",
  data() {
    return {
      services: [
        {
          icon: `<svg fill="#4F46E5" width="40" height="40" viewBox="0 0 24 24"><path d="M12 2a7 7 0 0 0-7 7v6a7 7 0 1 0 14 0v-6a7 7 0 0 0-7-7z"/></svg>`,
          title: "Özel Yazılım Geliştirme",
          description:
            "İhtiyacınıza özel, ölçeklenebilir ve sürdürülebilir yazılım çözümleri sunuyoruz.",
        },
        {
          icon: `<svg fill="#059669" width="40" height="40" viewBox="0 0 24 24"><path d="M4 4h16v16H4z"/></svg>`,
          title: "Web Tasarım & Geliştirme",
          description:
            "Modern, kullanıcı dostu ve mobil uyumlu web siteleri tasarlıyoruz.",
        },
        {
          icon: `<svg fill="#4338CA" width="40" height="40" viewBox="0 0 24 24"><circle cx="12" cy="12" r="5"/></svg>`,
          title: "Danışmanlık & Strateji",
          description:
            "İş süreçlerinizi analiz edip, dijital dönüşüm yolunda stratejiler geliştiriyoruz.",
        },
        {
          icon: `<svg fill="#059669" width="40" height="40" viewBox="0 0 24 24"><rect x="6" y="6" width="12" height="12" rx="2"/></svg>`,
          title: "Mobil Uygulama Geliştirme",
          description:
            "iOS ve Android platformlarına özel kullanıcı deneyimleri tasarlıyoruz.",
        },
        {
          icon: `<svg fill="#4F46E5" width="40" height="40" viewBox="0 0 24 24"><path d="M3 3h18v18H3z"/></svg>`,
          title: "E-Ticaret Çözümleri",
          description:
            "Özel ihtiyaçlarınıza uygun, güvenli ve hızlı online satış platformları sunuyoruz.",
        },
        {
          icon: `<svg fill="#059669" width="40" height="40" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm1 14h-2v-2h2Zm0-4h-2V7h2Z"/></svg>`,
          title: "Siber Güvenlik Hizmetleri",
          description:
            "Veri ve altyapı güvenliğinizi sağlamak için gelişmiş koruma çözümleri sunuyoruz.",
        },
      ],
    };
  },
};
</script>

<style scoped>
.services-section {
  padding: 80px 20px;
  background-color: #fff;
  font-family: 'Inter', sans-serif;
  text-align: center;
  max-width: 1100px;
  margin: 0 auto;
}

.section-title {
  font-size: 3rem;
  font-weight: 800;
  margin-bottom: 3rem;
  color: #1e293b;
  letter-spacing: -0.02em;
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2.8rem;
}

.service-card {
  background-color: #f9fafb;
  border-radius: 18px;
  padding: 2.5rem 2rem 3rem;
  box-shadow: 0 6px 20px rgb(0 0 0 / 0.05);
  cursor: pointer;
  transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.service-card:hover {
  background-color: #eef2ff;
  box-shadow: 0 10px 30px rgb(79 70 229 / 0.3);
  transform: translateY(-10px);
}

.icon-circle {
  background-color: #e0e7ff;
  border-radius: 50%;
  width: 72px;
  height: 72px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 1.25rem;
  box-shadow: 0 4px 12px rgb(79 70 229 / 0.2);
  transition: background-color 0.3s ease;
}

.service-card:hover .icon-circle {
  background-color: #6366f1;
}

.service-card:hover .icon-circle svg {
  fill: white !important;
}

.service-card h3 {
  font-size: 1.6rem;
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 0.75rem;
  text-align: center;
  line-height: 1.2;
}

.service-card p {
  font-size: 1rem;
  line-height: 1.5;
  color: #475569;
  text-align: center;
  max-width: 280px;
}

/* Responsive */
@media (max-width: 768px) {
  .services-grid {
    grid-template-columns: 1fr;
  }
}
</style>
