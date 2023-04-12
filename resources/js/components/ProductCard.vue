<template>
  <div class="max-w-2xl mx-auto">
    <div class="bg-white shadow-md rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
      <router-link to="/foo">
        <img class="rounded-lg p-5" src="/storage/img/product.avif" alt="product image">
      </router-link>
      <div class="px-5 pb-5">
        <router-link to="/foo">
          <h3 class="text-gray-900 font-semibold text-xl tracking-tight dark:text-white">Apple Watch Series 7
            GPS, Aluminium Case, Starlight Sport</h3>
        </router-link>
        <div>
          <Rate :rate="4"></Rate>
        </div>
        <div class="flex items-center justify-between">
          <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
          <a href="#"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
            to cart</a>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import { defineProps, reactive, toRefs } from "vue";
import Rate from "./base/Rates.vue"

const props = defineProps({ no: String });
const { no } = toRefs(props);

const state = reactive({
  room: {}
})

</script>
<style lang="scss" scoped></style>