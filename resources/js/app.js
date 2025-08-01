import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import 'bootstrap/dist/css/bootstrap.min.css';
import axios from 'axios';

axios.defaults.baseURL = 'http://127.0.0.1:8000/api';
axios.defaults.headers.common['Authorization'] = `Bearer ${localStorage.getItem('token')}`;

createApp(App).use(router).mount('#app');