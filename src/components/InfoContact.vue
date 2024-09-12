<script setup lang="ts">
import LinkedinIcon from '../components/icons/LinkedinIcon.vue'
import MaltIcon from '../components/icons/MaltIcon.vue'
import GithubIcon from '../components/icons/GithubIcon.vue'
import TwitterIcon from '../components/icons/TwitterIcon.vue'
import EmailIcon from '../components/icons/EmailIcon.vue'
import LocationIcon from '../components/icons/LocationIcon.vue'
import PhoneIcon from '../components/icons/PhoneIcon.vue'
</script>

<template>
  <div class="rounded-lg bg-darker p-4 row-span-2 flex flex-col justify-between">
    <div class="grid grid-cols-4 gird-rows-3 text-light text-2xl m-8 gap-y-12">
      <EmailIcon color="#fff" width="48" class="mx-auto" />
      <div class="col-span-3 flex items-center">p.coelho@hotmail.fr</div>
      <LocationIcon color="#fff" width="48" class="mx-auto" />
      <div class="col-span-3 flex items-center">Nice, France</div>
      <PhoneIcon color="#fff" width="48" class="mx-auto" />
      <div class="col-span-3 flex items-center">+33 7 70 27 57 24</div>
    </div>
    <div class="flex justify-between items-center mx-8">
      <LinkedinIcon color="#fff" width="96" />
      <MaltIcon color="#fff" width="96" />
      <GithubIcon color="#fff" width="96" />
      <TwitterIcon color="#fff" width="96" />
    </div>
  </div>
</template>
