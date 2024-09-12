<template>
  <RouterLink :to="path" class="absolute top-0 right-0 text-light text-6xl me-4">&times</RouterLink>
</template>

<script setup lang="ts">
defineProps({
  path: {
    type: String,
    required: true
  }
})
</script>
