<template>
  <div v-if="imagePosition == 'left'" class="w-full flex gap-4 my-8">
    <div :class="`rounded-lg bg-dark w-full bg-[url(${imageUrl})]`">
      <img :src="imageUrl" :alt="title" class="w-full" />
    </div>
    <div class="rounded-lg bg-darker w-full">
      <h3 class="text-lg font-semibold">{{ title }}</h3>
      <p class="text-sm"><slot></slot></p>
    </div>
  </div>
  <div v-else class="w-full flex gap-4 my-8">
    <div class="rounded-lg bg-darker w-full">
      <h3 class="text-lg font-semibold">{{ title }}</h3>
      <p class="text-sm"><slot></slot></p>
    </div>
    <div class="rounded-lg bg-dark w-full">
      <img :src="imageUrl" :alt="title" />
    </div>
  </div>
</template>

<script setup lang="ts">
import type { PropType } from 'vue'

type ImagePosition = 'left' | 'right'

const props = defineProps({
  title: String,
  imageName: String,
  imagePosition: String as PropType<ImagePosition>
})

const imageUrl = `src/assets/images/${props.imageName}`
</script>
