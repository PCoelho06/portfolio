<script setup lang="ts">
import ArrowIcon from '../components/icons/ArrowIcon.vue'

import HtmlIcon from './icons/HtmlIcon.vue'
import CssIcon from './icons/CssIcon.vue'
import TailwindIcon from './icons/TailwindIcon.vue'
import BootstrapIcon from './icons/BootstrapIcon.vue'
import SassIcon from './icons/SassIcon.vue'

import JavascriptIcon from './icons/JavascriptIcon.vue'
import VueIcon from './icons/VueIcon.vue'
import StorybookIcon from './icons/StorybookIcon.vue'
import NodeIcon from './icons/NodeIcon.vue'
import PhpIcon from './icons/PhpIcon.vue'
import SymfonyIcon from './icons/SymfonyIcon.vue'
import SpringIcon from './icons/SpringIcon.vue'

import GitIcon from './icons/GitIcon.vue'
import GithubIcon from './icons/GithubIcon.vue'
import GitlabIcon from './icons/GitlabIcon.vue'
import JenkinsIcon from './icons/JenkinsIcon.vue'
import VscIcon from './icons/VscIcon.vue'
import DockerIcon from './icons/DockerIcon.vue'
import FigmaIcon from './icons/FigmaIcon.vue'

const iconsWidth = 80
</script>

<template>
  <div class="overflow-hidden">
    <div class="relative">
      <div class="h-full grid grid-cols-3 grid-rows-1">
        <div class="h-[200%] flex flex-col justify-between items-center gap-8 translate-up">
          <HtmlIcon :width="iconsWidth" />
          <CssIcon :width="iconsWidth" />
          <TailwindIcon :width="iconsWidth" />
          <BootstrapIcon :width="iconsWidth" />
          <SassIcon :width="iconsWidth" />
          <JavascriptIcon :width="iconsWidth" />
          <HtmlIcon :width="iconsWidth" />
          <CssIcon :width="iconsWidth" />
          <TailwindIcon :width="iconsWidth" />
          <BootstrapIcon :width="iconsWidth" />
          <SassIcon :width="iconsWidth" />
          <JavascriptIcon :width="iconsWidth" />
        </div>
        <div class="h-[200%] flex flex-col justify-between items-center gap-8 translate-down">
          <PhpIcon :width="iconsWidth" />
          <SymfonyIcon :width="iconsWidth" />
          <VueIcon :width="iconsWidth" />
          <StorybookIcon :width="iconsWidth" />
          <NodeIcon :width="iconsWidth" />
          <SpringIcon :width="iconsWidth" />
          <PhpIcon :width="iconsWidth" />
          <SymfonyIcon :width="iconsWidth" />
          <VueIcon :width="iconsWidth" />
          <StorybookIcon :width="iconsWidth" />
          <NodeIcon :width="iconsWidth" />
          <SpringIcon :width="iconsWidth" />
        </div>
        <div class="h-[200%] flex flex-col justify-between items-center gap-8 translate-up">
          <GitIcon :width="iconsWidth" />
          <GithubIcon :width="iconsWidth" />
          <GitlabIcon :width="iconsWidth" />
          <JenkinsIcon :width="iconsWidth" />
          <VscIcon :width="iconsWidth" />
          <DockerIcon :width="iconsWidth" />
          <GitIcon :width="iconsWidth" />
          <GithubIcon :width="iconsWidth" />
          <GitlabIcon :width="iconsWidth" />
          <JenkinsIcon :width="iconsWidth" />
          <VscIcon :width="iconsWidth" />
          <DockerIcon :width="iconsWidth" />
        </div>
      </div>
      <div class="absolute top-4 left-4 flex justify-start items-end">
        <h2 class="text-dark">About me</h2>
        <ArrowIcon />
      </div>
      <div class="absolute bottom-1/4 right-0 translate-x-1/3">
        <img src="@/assets/images/about.png" alt="" class="w-full" />
      </div>
    </div>
  </div>
</template>
