<template>
  <div class="login-wrapper">
    <div class="login-box">
      <h2 class="login-title">Admin Giriş</h2>
      <form @submit.prevent="login">
        <input
          type="email"
          v-model="email"
          placeholder="Email"
          required
          autocomplete="username"
          class="input-field"
        />
        <input
          type="password"
          v-model="password"
          placeholder="Şifre"
          required
          autocomplete="current-password"
          class="input-field"
        />
        <button type="submit" class="btn-login">Giriş Yap</button>
      </form>
      <p v-if="error" class="error-text">{{ error }}</p>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      email: '',
      password: '',
      error: '',
    };
  },
  methods: {
    async login() {
      this.error = '';
      try {
        const response = await axios.post('http://127.0.0.1:8000/api/login', {
          email: this.email,
          password: this.password,
        });
        localStorage.setItem('token', response.data.token);
        this.$router.push('/admin-dashboard');
      } catch (err) {
        this.error = 'Email veya şifre hatalı.';
      }
    },
  },
};
</script>

<style scoped>
.login-wrapper {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  /* Soft mor degrade arka plan */
  background: linear-gradient(135deg, #7f53ac, #6a82fb);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.login-box {
  background-color: #fff;
  padding: 2rem 2.5rem;
  border-radius: 14px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
  width: 360px;
  color: #333;
}
.login-title {
  background: linear-gradient(90deg, #6a82fb, #7f53ac);
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}


.input-field {
  width: 100%;
  padding: 0.85rem 1rem;
  margin-bottom: 1.2rem;
  border-radius: 8px;
  border: 1.8px solid #ddd;
  font-size: 1rem;
  transition: border-color 0.3s ease;
  color: #333;
  background-color: #fff;
}

.input-field::placeholder {
  color: #aaa;
}

.input-field:focus {
  outline: none;
  border-color: #6a82fb; /* Mor vurgu */
  box-shadow: 0 0 8px #6a82fbaa;
}

.btn-login {
  width: 100%;
  background-color: #6a82fb; /* Mor buton */
  color: white;
  padding: 0.95rem 1rem;
  font-weight: 700;
  font-size: 1.1rem;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  transition: background-color 0.25s ease;
  box-shadow: 0 4px 14px rgba(106, 130, 251, 0.6);
}

.btn-login:hover {
  background-color: #5a6ce0;
  box-shadow: 0 6px 20px rgba(90, 108, 224, 0.7);
}

.error-text {
  margin-top: 1rem;
  color: #ff4d6d;
  font-weight: 600;
  text-align: center;
}
</style>
