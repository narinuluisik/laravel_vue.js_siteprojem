<template>
  <section class="services py-6 bg-white">
    <div class="container-xl">
      <div class="text-center mb-5">
        <h2 class="section-heading fw-bold mb-3">Hizmetlerimiz</h2>
        <p class="text-muted mx-auto" style="max-width: 600px;">
          İşinizi büyütmek için sunduğumuz yenilikçi ve kaliteli çözümler
        </p>
      </div>

      <div class="row g-4">
        <div
          class="col-md-6 col-lg-4"
          v-for="(service, index) in services"
          :key="index"
        >
          <div class="service-card p-4 rounded shadow-sm h-100 text-center">
            <div class="service-icon mb-3" v-html="service.icon"></div>
            <h5 class="fw-semibold mb-2">{{ service.title }}</h5>
            <p class="text-secondary">{{ service.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Services",
  data() {
    return {
    services: [
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" fill="#6366F1" width="48" height="48" viewBox="0 0 24 24"><path d="M12 2a7 7 0 0 0-7 7v6a7 7 0 1 0 14 0v-6a7 7 0 0 0-7-7zm5 13a5 5 0 0 1-10 0v-6a5 5 0 0 1 10 0z"/></svg>`,
    title: "Özel Yazılım Geliştirme",
    description:
      "İhtiyacınıza özel, ölçeklenebilir ve sürdürülebilir yazılım çözümleri.",
  },
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" fill="#10B981" width="48" height="48" viewBox="0 0 24 24"><path d="M4 4h16v16H4z"/></svg>`,
    title: "Web Tasarım & Geliştirme",
    description:
      "Modern, kullanıcı dostu ve mobil uyumlu web siteleri tasarlıyoruz.",
  },
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" fill="#6366F1" width="48" height="48" viewBox="0 0 24 24"><path d="M12 7a5 5 0 1 1 0 10a5 5 0 0 1 0-10z"/></svg>`,
    title: "Danışmanlık & Strateji",
    description:
      "İş süreçlerinizi analiz edip, dijital dönüşüm yolunda stratejiler geliştiriyoruz.",
  },
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" fill="#10B981" width="48" height="48" viewBox="0 0 24 24"><path d="M20 6v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6h16Zm-6 3a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/></svg>`,
    title: "Mobil Uygulama Geliştirme",
    description:
      "iOS ve Android platformlarına özel kullanıcı deneyimleri tasarlıyoruz.",
  },
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" fill="#6366F1" width="48" height="48" viewBox="0 0 24 24"><path d="M3 3h18v18H3z"/></svg>`,
    title: "E-Ticaret Çözümleri",
    description:
      "Özel ihtiyaçlarınıza uygun, güvenli ve hızlı online satış platformları sunuyoruz.",
  },
  {
    icon: `<svg xmlns="http://www.w3.org/2000/svg" fill="#10B981" width="48" height="48" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm1 14h-2v-2h2Zm0-4h-2V7h2Z"/></svg>`,
    title: "Siber Güvenlik Hizmetleri",
    description:
      "Veri ve altyapı güvenliğinizi sağlamak için gelişmiş koruma çözümleri.",
  },
],

    };
  },
};
</script>

<style scoped>
.services {
  background-color: #fff;
}

.section-heading {
  font-size: 2.8rem;
  color: #232946;
  letter-spacing: -1px;
}

.service-card {
  transition: all 0.3s ease;
  cursor: pointer;
  background-color: #f9fafb;
  border-radius: 12px;
}

.service-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 12px 24px rgba(99, 102, 241, 0.15);
  background-color: #eef2ff;
}

.service-icon svg {
  width: 48px;
  height: 48px;
}

.fw-semibold {
  font-weight: 600;
}

.text-secondary {
  color: #6b7280;

}
.text-muted.mx-auto {
  margin-bottom: 3rem;
}
.services-section {
  margin-top: 80px;
}
</style>
