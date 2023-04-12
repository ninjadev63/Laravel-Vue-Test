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
			<ProductCard v-for="i in 10" :key="i" class="lg:col-span-1"></ProductCard>
		</div>
	</div>
</template>

<script setup>
import { computed } from "@vue/reactivity";
import { useStore } from "vuex";

import ProductCard from "../components/productCard.vue";
import Dropdown from "../components/base/Dropdown.vue";

const store = useStore();
const categories = computed(() => [{ id: 0, label: "All" }, ...store.getters['categories/categories']]);

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