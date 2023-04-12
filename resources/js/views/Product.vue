<template>
	<div class="text-center md:py-16 py-8">
		<router-link to="/"
			class="hover:text-blue-500 transition-none transition duration-100 absolute left-5">&lt;-</router-link>
		<h1 class="text-3xl">
			Product Page
		</h1>
	</div>
	<div class="md:grid md:grid-cols-[minmax(350px,1fr),1fr,1fr] px-10 flex flex-wrap">
		<div class="col-span-1 md:border-r border-gray-400">
			<img class="rounded-lg p-5" :src="product.image" alt="product image">
		</div>
		<div class="col-span-2 py-5 pl-5 flex flex-col justify-between">
			<div>
				<h3 class="text-3xl font-bold">{{ product.title }}</h3>
				<Rates :rate="product.rating">
					<template #description>
						<span class="text-gray-400">(449 customer review)</span>
					</template>
				</Rates>
			</div>
			<div class="mb-5">
				<h3 class="text-lg font-bold">Price</h3>
				<h3 class="text-3xl font-bold">$ {{ product.price }} USD</h3>
			</div>
			<div class="mb-5">
				<h3 class="text-lg font-bold">Description</h3>
				<div>{{ product.description }}</div>
			</div>

			<div>
				<a href="#"
					class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
					to cart</a>
			</div>
		</div>
	</div>
</template>


<script setup>
import Rates from "../components/base/Rates.vue";
import { useRoute } from "vue-router";
import { useStore } from "vuex";
import { computed } from "vue";

const route = useRoute();
const store = useStore();

const product = computed(() => store.getters['products/products'].find(p => +p.id === +route.params.id));
</script>

<style lang="scss" scoped></style>
