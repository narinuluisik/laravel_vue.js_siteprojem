import axios from 'axios';

axios.defaults.baseURL = 'http://localhost:8000/api';
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Eğer session bazlı auth yapacaksan:
axios.defaults.withCredentials = true;

window.axios = axios;