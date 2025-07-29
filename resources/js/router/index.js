import { createRouter, createWebHistory } from 'vue-router';
import Home from '../components/pages/Home.vue';
import About from '../components/pages/About.vue';
import ContactPage from '../components/pages/Contact/ContactPage.vue';
import Login from '../components/auth/Login.vue';
import AdminDashboard from '../components/admin/AdminDashboard.vue';

const routes = [
  { path: '/', name: 'home', component: Home, meta: { layout: 'DefaultLayout' } },
  { path: '/hakkimizda', name: 'about', component: About, meta: { layout: 'DefaultLayout' } },
  { path: '/iletisim', name: 'contact', component: ContactPage, meta: { layout: 'DefaultLayout' } },
  { path: '/login', name: 'login', component: Login, meta: { layout: 'AuthLayout', guest: true } },

  { 
    path: '/admin/dashboard', 
    name: 'admin.dashboard', 
    component: AdminDashboard, 
    meta: { layout: 'AdminLayout', requiresAuth: true } 
  },
  {
    path: '/admin/about',
    name: 'AdminAbout',
    component: () => import('../components/admin/AboutPage.vue'),
    meta: { layout: 'AdminLayout', requiresAuth: true }
  },
  {
    path: '/admin/aboutus/edit/:id',
    name: 'EditAboutUs',
    component: () => import('../components/admin/aboutus/EditAboutUs.vue'),
    meta: { layout: 'AdminLayout', requiresAuth: true }
  },
  {
    path: '/admin/projects/edit/:id',
    name: 'EditProject',
    component: () => import('../components/admin/projects/EditProject.vue'),
    meta: { layout: 'AdminLayout', requiresAuth: true }
  },
  {
    path: '/admin/projects/create',
    name: 'CreateProject',
    component: () => import('../components/admin/projects/CreateProject.vue'),
    meta: { layout: 'AdminLayout', requiresAuth: true }
  },
  {
    path: '/admin/team-members/edit/:id',
    name: 'TeamEdit',
    component: () => import('../components/admin/team/TeamEdit.vue'),
    meta: { layout: 'AdminLayout', requiresAuth: true }
  },
  {
    path: '/admin/team-members/create',
    name: 'TeamCreate',
    component: () => import('../components/admin/team/TeamCreate.vue'),
    meta: { layout: 'AdminLayout', requiresAuth: true }
  },
  {
    path: '/admin/contacts',
    name: 'AdminContacts',
    component: () => import('../components/admin/ContactPage.vue'),
    meta: { layout: 'AdminLayout', requiresAuth: true }
  },
  {
    path: '/admin/contacts/create',
    name: 'AdminContactCreate',
    component: () => import('../components/admin/contact/ContactCreate.vue'),
    meta: { layout: 'AdminLayout', requiresAuth: true }
  },
  {
    path: '/admin/contacts/edit/:id',
    name: 'AdminContactEdit',
    component: () => import('../components/admin/contact/ContactEdit.vue'),
    meta: { layout: 'AdminLayout', requiresAuth: true }
  },
  {
    path: '/admin/contact-messages',
    name: 'AdminContactMessages',
    component: () => import('../components/admin/ContactMessages.vue'),
    meta: { layout: 'AdminLayout', requiresAuth: true }
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

// Global Navigation Guard
router.beforeEach((to, from, next) => {
  const isAuthenticated = !!localStorage.getItem('token'); // localStorage'dan token kontrolü

  if (to.meta.requiresAuth && !isAuthenticated) {
    // Eğer giriş yapmamışsa login sayfasına yönlendir
    next({ name: 'login' });
  }else {
    next();
  }
});

export default router;
