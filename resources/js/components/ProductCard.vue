<template>
	<div class="max-w-2xl mx-auto">
		<div class="bg-white shadow-md rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
			<router-link :to="'/' + props.product?.id">
				<img class="rounded-lg p-5" :src="props.product?.image" alt="product image">
			</router-link>
			<div class="px-5 pb-5">
				<router-link :to="'/' + props.product?.id">
					<h3 class="text-gray-900 font-semibold text-xl tracking-tight dark:text-white">
						{{ props.product?.title }}
					</h3>
				</router-link>
				<div>
					<Rate :rate="props.product?.rating"></Rate>
				</div>
				<div class="flex items-center justify-between">
					<span class="text-3xl font-bold text-gray-900 dark:text-white">${{ props.product?.price }}</span>
					<a href="#"
						class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
						to cart</a>
				</div>
			</div>
		</div>
	</div>
</template>
<script setup>
import { defineProps } from "vue";
import Rate from "./base/Rates.vue";

const props = defineProps({
	product: Object
});

</script>
<style lang="scss" scoped></style>