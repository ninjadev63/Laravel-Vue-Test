<template>
	<h1 class="text-center text-3xl md:py-16 py-8">
		Products Page
	</h1>
	<div class="p-10 pt-0">
		<div class="flex justify-between px-10">
			<Dropdown :items="categories" title="Categories" @change="onCategoryChange" />
			<Dropdown :items="sortSettings" title="Sorting" @change="onSortChange" />
		</div>
		<div class="lg:grid-cols-3 lg:grid lg:mt-10 mt-5 flex flex-wrap gap-4">
			<ProductCard v-for="product in products" :key="product.id" :product="product" class="lg:col-span-1">
			</ProductCard>
		</div>
	</div>
</template>

<script setup>
import { computed } from "@vue/reactivity";
import { useStore } from "vuex";

import ProductCard from "../components/productCard.vue";
import Dropdown from "../components/base/Dropdown.vue";

import { calcAge } from "../util";


const store = useStore();
const me = computed(() => store.getters['users/me']);
const age = computed(() => calcAge(me.value?.birthday));

const categories = computed(() => {
	const MIN_AGE = 18; const MAX_AGE = 30;
	if (age.value >= MIN_AGE && age.value <= MAX_AGE) {
		return [{ id: 0, label: "All", is_validate: 0 }, ...store.getters['categories/categories']];
	} else {
		return [{ id: 0, label: "All", is_validate: 0 }, ...store.getters['categories/categories'].filter(category => !category.is_validated)];
	}
});
const products = computed(() => [...store.getters['products/products']]);

const sortSettings = [
	{ label: "None", id: "none" },
	{ label: "Price", id: "price" },
	{ label: "Rating", id: "rating" },
	{ label: "Title", id: "title" },
]

const onCategoryChange = async ({ id }) => {
	await store.dispatch('products/fetchProducts', { currentCategory: id });
}

const onSortChange = async ({ id }) => {
	await store.dispatch('products/fetchProducts', { currentSort: id });
}
</script>

<style scoped></style>