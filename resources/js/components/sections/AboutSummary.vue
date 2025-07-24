<template>
  <section class="why-choose py-6 bg-light">
    <div class="container-xl">
      <div class="text-center mb-5">
        <h2 class="section-heading fw-bold mb-3">Neden NarSoft?</h2>
      </div>
      <div class="row align-items-center gy-5">
        <!-- Sol taraf: sade liste, kart olmadan -->
        <div class="col-lg-5 text-center text-lg-start">
          <p class="lead mb-4 mx-auto mx-lg-0" style="max-width: 480px; color: #232946;">
            Dijital dönüşüm yolculuğunuzda
            <span class="text-primary fw-semibold">güvenilir</span> ve
            <span class="text-success fw-semibold">yenilikçi</span> bir partner arıyorsanız,
            NarSoft sizin için burada.
          </p>

          <ul class="simple-list fs-5 text-dark mx-auto mx-lg-0" style="max-width: 480px;">
            <li v-for="item in highlights" :key="item.text" class="d-flex align-items-center mb-3">
              <div class="highlight-icon me-3" :style="{ backgroundColor: item.color }" v-html="item.icon"></div>
              <span>{{ item.text }}</span>
            </li>
          </ul>
        </div>

        <!-- Sağ taraf: kartlar -->
        <div class="col-lg-7 d-flex justify-content-center">
          <div class="row g-4 w-100">
            <div
              class="col-6"
              v-for="(feature, index) in features"
              :key="feature.title"
            >
              <div
                class="feature-card p-4 h-100 shadow rounded-4 bg-white text-center"
                :class="{ 'hovered': hoveredIndex === index }"
                @mouseenter="hoveredIndex = index"
                @mouseleave="hoveredIndex = null"
              >
                <div class="icon mb-3" v-html="feature.icon"></div>
                <h4 class="fw-semibold mb-2 text-dark">{{ feature.title }}</h4>
                <p class="text-secondary">{{ feature.text }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "WhyChoose",
  data() {
    return {
      hoveredIndex: null,
      features: [
        {
          icon: `<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#6366F1" viewBox="0 0 24 24"><path d="M12 2a7 7 0 1 1-7 7 7.008 7.008 0 0 1 7-7Zm1 10h3a1 1 0 0 0 0-2h-3v-3a1 1 0 0 0-2 0v3H8a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0Zm7 4v3a2 2 0 0 1-2 2h-4.5a3.5 3.5 0 1 1 0-7H17a2 2 0 0 1 2 2Zm-2 1h-3.5a1.5 1.5 0 1 0 0 3H17Z"/></svg>`,
          title: "Yaratıcı Çözümler",
          text: "Her projeye özel inovatif yaklaşımlar",
        },
        {
          icon: `<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#10B981" viewBox="0 0 24 24"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2Zm-7 14-5-5 1.414-1.414L12 14.172l5.586-5.586L19 10l-7 7Z"/></svg>`,
          title: "Zamanında Teslim",
          text: "Planlanan sürede eksiksiz teslimat",
        },
        {
          icon: `<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#6366F1" viewBox="0 0 24 24"><path d="M12 1a9 9 0 0 0-9 9c0 6 9 13 9 13s9-7 9-13a9 9 0 0 0-9-9Zm0 15a3 3 0 1 1 3-3 3 3 0 0 1-3 3Z"/></svg>`,
          title: "Veri Güvenliği",
          text: "Tüm süreçlerde üst düzey koruma",
        },
        {
          icon: `<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#10B981" viewBox="0 0 24 24"><path d="M3 6h18M3 12h18M3 18h18"/></svg>`,
          title: "7/24 Destek",
          text: "Her zaman ulaşılabilir teknik ekip",
        },
      ],
      highlights: [
        {
          icon: `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4m0-4h.01"/></svg>`,
          text: "Yenilikçi teknolojilerle fark yaratıyoruz",
          color: "#e0e4ff",
        },
        {
          icon: `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M21 10v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6"/><path d="M7 10l5 5 5-5"/></svg>`,
          text: "İş ortaklığı yaklaşımıyla uzun vadeli destek",
          color: "#d7f8e1",
        },
        {
          icon: `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2" ry="2"/><path d="M16 2v4M8 2v4"/></svg>`,
          text: "Şeffaf süreç yönetimi ve sürekli bilgilendirme",
          color: "#e0e4ff",
        },
        {
          icon: `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/></svg>`,
          text: "Başarıya odaklı, ölçülebilir sonuçlar",
          color: "#d7f8e1",
        },
      ],
    };
  },
};
</script>

<style scoped>
.why-choose {
  background: #f6f8fb;
  padding-top: 48px;
  padding-bottom: 48px;
}

.section-heading {
  font-size: 3rem;
  color: #232946;
  letter-spacing: -1px;
  text-align: center;
  margin-bottom: 2rem;
}

.lead {
  font-size: 1.18rem;
  color: #232946;
  margin-bottom: 2rem;
}

.simple-list {
  list-style: none;
  padding-left: 0;
  margin-top: 0;
}

.simple-list li {
  font-weight: 500;
  color: #2d2d3a;
  display: flex;
  align-items: center;
  gap: 14px;
  font-size: 1.15rem;
}

.highlight-icon {
  width: 40px;
  height: 40px;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: inherit;
  flex-shrink: 0;
}

.highlight-icon svg {
  width: 24px;
  height: 24px;
}

.feature-card {
  transition: all 0.3s ease;
  cursor: pointer;
  border-radius: 20px;
}

.feature-card.hovered,
.feature-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 10px 20px rgba(99, 102, 241, 0.25);
  background-color: #f0f4ff;
}

.icon svg {
  width: 40px;
  height: 40px;
}

.text-secondary {
  color: #6b7280;
}
</style>
