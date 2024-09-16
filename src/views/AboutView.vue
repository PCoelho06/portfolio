<script setup lang="ts">
import ThePresentation from '../components/ThePresentation.vue'
import InfoContact from '../components/InfoContact.vue'
import CurriculumAbout from '../components/CurriculumAbout.vue'
</script>

<template>
  <div class="h-full grid grid-cols-3 grid-rows-2 gap-4">
    <ThePresentation />
    <div class="rounded-lg bg-light col-span-2 row-span-2 flex flex-col justify-between">
      <CurriculumAbout />
    </div>
    <InfoContact />
  </div>
</template>
