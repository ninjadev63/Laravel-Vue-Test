<template>
  <h1 class="text-center text-3xl md:py-16 py-8">
    Products Page
  </h1>
  <div class="p-10 pt-0 lg:grid-cols-3 lg:grid flex flex-wrap gap-4">
    <ProductCard v-for="i in 10" :key="i" class="lg:col-span-1"></ProductCard>
  </div>
</template>

<script setup>
import { ref } from "vue";
import ProductCard from "../components/productCard.vue"

const count = ref(0)
</script>

<style scoped></style>