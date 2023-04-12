<template>
	<div class="flex justify-start items-center gap-2">
		<span>{{ props.title }}</span>
		<div class="relative">
			<!-- Dropdown toggle button -->
			<button @click="isOpen" class="flex items-center p-2 text-indigo-100 bg-blue-700 rounded-md">
				<span class="mr-4">{{ currentItem.label }}</span>
				<svg class="w-5 h-5 text-indigo-100 dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
					fill="currentColor">
					<path fill-rule="evenodd"
						d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
						clip-rule="evenodd" />
				</svg>
			</button>

			<!-- Dropdown menu -->
			<div v-show="show" class="absolute left-0 py-2 mt-2 bg-blue-600 rounded-md shadow-xl w-36">
				<a v-for="item in props.items" :key="item.id"
					class="block px-4 py-2 text-sm text-blue-100  hover:bg-blue-400 hover:text-blue-100 cursor-pointer"
					@click="setCurrentItem(item)">
					{{ item.label }}
				</a>
			</div>
		</div>
	</div>
</template>
<script setup>
import { ref, defineProps, defineEmits } from 'vue';

const props = defineProps({
	items: Array,
	defaultItem: Object,
	title: String
})

const emit = defineEmits(['change'])

let currentItem = ref(props.defaultItem || props.items[0]);
const setCurrentItem = item => {
	currentItem.value = item;
	show.value = false;
	emit('change', item)
}

const show = ref(false);
const isOpen = () => (show.value = !show.value);
</script>