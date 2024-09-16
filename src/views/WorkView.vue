<script setup lang="ts">
import ThePresentation from '../components/ThePresentation.vue'
import InfoContact from '../components/InfoContact.vue'
import ProjectWork from '../components/ProjectWork.vue'
</script>

<template>
  <div class="h-full grid grid-cols-3 grid-rows-2 gap-8">
    <ThePresentation />
    <div class="col-span-2 row-span-2">
      <h2 class="text-center mt-8">Portfolio</h2>
      <ProjectWork title="Test 1" imagePosition="left" imageName="partageprof.png"
        >Description test</ProjectWork
      >
      <ProjectWork title="Test 2">Description test</ProjectWork>
    </div>
    <InfoContact />
  </div>
</template>
