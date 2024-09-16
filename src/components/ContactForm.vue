<template>
  <div class="h-full flex flex-col justify-around relative">
    <h2 class="text-center text-light mt-8">Contact me</h2>
    <div class="h-auto flex justify-center items-center">
      <form action="" class="w-3/4">
        <div class="mb-4">
          <label for="name" class="text-lg text-light font-bold">Name</label>
          <input type="text" name="name" id="name" class="w-full h-12 text-lg rounded-lg" />
        </div>
        <div class="my-4">
          <label for="email" class="text-lg text-light font-bold">Email</label>
          <input type="email" name="email" id="email" class="w-full h-12 text-lg rounded-lg" />
        </div>
        <div class="mt-4">
          <label for="message" class="text-lg text-light font-bold">Message</label>
          <textarea name="message" id="message" class="w-full h-96 text-lg rounded-lg"></textarea>
        </div>
        <button
          type="submit"
          class="mx-auto my-8 px-8 py-4 bg-important text-light text-2xl rounded-lg flex justify-between gap-4 font-bold"
        >
          <SendIcon width="32" />
          Send
        </button>
      </form>
      <CloseButton path="/" />
    </div>
  </div>
</template>

<script setup lang="ts">
import SendIcon from '@/components/icons/SendIcon.vue'
import CloseButton from '@/components/CloseButton.vue'
</script>
