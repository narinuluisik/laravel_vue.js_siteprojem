import { createRouter, createWebHistory } from 'vue-router';
import Home from '../components/pages/Home.vue';
import About from '../components/pages/About.vue';
import ContactPage from '../components/pages/Contact/ContactPage.vue'
const routes = [
  { path: '/', component: Home },
  { path: '/hakkimizda', component: About },
{ path: '/iletisim', component: ContactPage }, 
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});



export default router;
