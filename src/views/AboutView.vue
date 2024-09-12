<script setup lang="ts">
import ThePresentation from '../components/ThePresentation.vue'
import ContactHome from '../components/ContactHome.vue'
import AboutHome from '../components/AboutHome.vue'
import WorkHome from '../components/WorkHome.vue'
import BlogHome from '../components/BlogHome.vue'
</script>

<template>
  <div class="grid grid-cols-3 grid-rows-2 gap-4">
    <ThePresentation />
    <RouterLink
      to="/about"
      class="rounded-lg bg-light p-0 row-span-2 flex flex-col justify-between"
    >
      <AboutHome />
    </RouterLink>
    <WorkHome />
    <ContactHome />
    <BlogHome />
  </div>
</template>
