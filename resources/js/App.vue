<template>
  <component :is="layout">
    <router-view />
  </component>
</template>

<script>
import DefaultLayout from './components/layout/DefaultLayout.vue';
import AuthLayout from './components/layout/AuthLayout.vue';
import AdminLayout from './components/layout/AdminLayout.vue';

export default {
  components: {
    DefaultLayout,
    AuthLayout,
    AdminLayout,
  },
  computed: {
    layout() {
  const layoutName = this.$route.meta.layout || 'DefaultLayout';
  return this.$options.components[layoutName] || DefaultLayout;
}

  }
}
</script>
