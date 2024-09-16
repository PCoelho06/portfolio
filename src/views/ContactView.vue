<script setup lang="ts">
import ThePresentation from '../components/ThePresentation.vue'
import ContactForm from '../components/ContactForm.vue'
import InfoContact from '../components/InfoContact.vue'
</script>

<template>
  <div class="h-full grid grid-cols-3 grid-rows-2 gap-4">
    <ThePresentation />
    <div class="rounded-lg bg-light col-span-2 row-span-2 flex flex-col justify-between">
      <ContactForm />
    </div>
    <InfoContact />
  </div>
</template>
