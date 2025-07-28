<template>
  <div class="container mt-4">
    <h2>Takım Üyesi Düzenleme</h2>

    <form @submit.prevent="updateMember" class="bg-white p-4 rounded shadow-sm">
      <div class="mb-3">
        <label for="name" class="form-label">Adı</label>
        <input id="name" v-model="member.name" type="text" class="form-control" required />
      </div>

      <div class="mb-3">
        <label for="role" class="form-label">Pozisyon</label>
        <input id="role" v-model="member.role" type="text" class="form-control" />
      </div>

      <div class="mb-3">
        <label for="bio" class="form-label">Hakkında</label>
        <textarea id="bio" v-model="member.bio" rows="4" class="form-control"></textarea>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Resim URL</label>
        <input id="image" v-model="member.image" type="text" class="form-control" />
        <div v-if="member.image" class="mt-2">
          <img :src="member.image.trim()" alt="Member Image" style="max-width: 200px;" />
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Güncelle</button>
      <button type="button" class="btn btn-secondary ms-2" @click="goBack">İptal</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'TeamEdit',
  data() {
    return {
      member: {
        name: '',
        role: '',
        bio: '',
        image: '',
      },
    };
  },
  mounted() {
    this.fetchMember();
  },
  methods: {
    async fetchMember() {
      try {
        const id = this.$route.params.id;
        const response = await axios.get(`/admin/team-members/${id}`);
        this.member = response.data;
      } catch (error) {
        console.error('Takım üyesi verisi alınamadı:', error);
        alert('Takım üyesi verisi yüklenemedi!');
      }
    },
    async updateMember() {
      try {
        const id = this.$route.params.id;
        await axios.put(`/admin/team-members/${id}`, this.member);
        alert('Takım üyesi güncellendi!');
        this.$router.push('/admin/about'); // veya uygun liste sayfası
      } catch (error) {
        console.error('Takım üyesi güncelleme başarısız:', error);
        alert('Güncelleme sırasında hata oluştu!');
      }
    },
    goBack() {
      this.$router.back();
    },
  },
};
</script>

<style scoped>
.container {
  max-width: 800px;
  background-color: #f8fafc;
}
</style>
