<template>
  <div class="h-full flex flex-col justify-around relative">
    <h2 class="text-center text-light mt-8">Curriculum</h2>
    <div class="h-3/4">
      <div class="h-1/2 flex justify-center items-center">
        <div class="relative border-s-2 w-3/4 h-full">
          <div class="absolute -left-[76px] flex items-center gap-8">
            <div class="text-light font-bold"><p>2024</p></div>
            <div><span class="dot"></span></div>
            <div class="text-light">
              <h3 class="font-bold text-2xl">Fullstack developer - Niji</h3>
              <p class="italic">Internship</p>
            </div>
          </div>
          <div class="absolute -left-[76px] top-32 flex items-center gap-8">
            <div class="text-light font-bold"><p>2024</p></div>
            <div><span class="dot"></span></div>
            <div class="text-light">
              <h3 class="font-bold text-2xl">Titre professionnel - DWWM</h3>
              <p class="italic">Level 5</p>
            </div>
          </div>
          <div class="absolute -left-[76px] top-64 flex items-center gap-8">
            <div class="text-light font-bold"><p>2024</p></div>
            <div><span class="dot"></span></div>
            <div class="text-light">
              <h3 class="font-bold text-2xl">CS50x - Harvard</h3>
              <p class="italic">See certificate</p>
            </div>
          </div>
        </div>
        <CloseButton path="/" />
      </div>
      <div class="h-1/2 flex justify-center items-center">
        <div class="relative border-t-2 border-e-2 w-3/4 h-full">
          <div class="absolute -right-[76px] top-8 flex items-center gap-8">
            <div class="text-light text-end">
              <h3 class="font-bold text-2xl">Mathematics teacher</h3>
              <p class="italic">6th grade to 9th grade</p>
            </div>
            <div><span class="dot"></span></div>
            <div class="text-light font-bold text-center">
              <p>
                2015 <br />
                - <br />
                2023
              </p>
            </div>
          </div>
          <div class="absolute -right-[76px] top-40 flex items-center gap-8">
            <div class="text-light text-end">
              <h3 class="font-bold text-2xl">Masters in mathematics education</h3>
              <p class="italic">University of Franche Comté</p>
            </div>
            <div><span class="dot"></span></div>
            <div class="text-light font-bold text-center">
              <p>2015</p>
            </div>
          </div>
        </div>
        <CloseButton path="/" />
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import CloseButton from '@/components/CloseButton.vue'
</script>
