<template>
  <svg :width="width" :height="width" viewBox="0 0 128 128">
    <path
      :fill="color"
      d="M0 8.934l49.854.158 14.3 24.415 14.3-24.415 49.548-.158-63.835 110.134zm126.987.637l-24.37.021-38.473 66.053L25.692 9.592l-24.75-.02 63.212 107.89z"
    ></path>
  </svg>
</template>

<script setup lang="ts">
const props = defineProps({
  color: {
    type: String,
    default: '#fff'
  },
  width: {
    type: String,
    default: '128'
  }
})
</script>
