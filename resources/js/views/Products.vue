<template>
  <h1 class="text-center text-3xl md:py-16 py-8">
    Products Page
  </h1>
  <div class="p-10 pt-0">
    <div class="flex justify-between px-10">
      <Dropdown :items="categories" title="Categories" />
      <Dropdown :items="sortSettings" title="Sorting" />
    </div>
    <div class="lg:grid-cols-3 lg:grid lg:mt-10 mt-5 flex flex-wrap gap-4">
      <ProductCard v-for="i in 10" :key="i" class="lg:col-span-1"></ProductCard>
    </div>
  </div>
</template>

<script setup>
import ProductCard from "../components/productCard.vue";
import Dropdown from "../components/base/Dropdown.vue";

const categories = [
  { label: "All", value: "all" },
  { label: "Bags", value: "bags" },
  { label: "Flower Port", value: "flower-port" },
  { label: "Watch", value: "watch" },
  { label: "Accessories", value: "accessories" },
  { label: "Game Accessories", value: "game-accessories" },
]

const sortSettings = [
  { label: "None", value: "none" },
  { label: "Price", value: "price" },
  { label: "Rating", value: "rating" },
  { label: "Name", value: "name" },
]
</script>

<style scoped></style>