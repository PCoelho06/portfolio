<script setup lang="ts">
import ThePresentation from '../components/ThePresentation.vue'
import ContactHome from '../components/ContactHome.vue'
import AboutHome from '../components/AboutHome.vue'
import WorkHome from '../components/WorkHome.vue'
import BlogHome from '../components/BlogHome.vue'
import { RouterLink } from 'vue-router'
</script>

<template>
  <div class="h-full grid grid-cols-3 grid-rows-2 gap-4">
    <ThePresentation />
    <RouterLink
      to="/about"
      class="rounded-lg bg-light p-4 row-span-2 flex flex-col justify-between"
    >
      <AboutHome />
    </RouterLink>
    <RouterLink to="/work" class="rounded-lg bg-light p-4">
      <WorkHome />
    </RouterLink>
    <RouterLink to="/contact" class="rounded-lg bg-darker p-4 flex flex-col justify-between">
      <ContactHome />
    </RouterLink>
    <BlogHome />
  </div>
</template>
