<template>
	<div class="my-2 border justify-center flex items-center rounded-md shadow-md max-w-sm">
		<div>
			<button type="submit"
				class="flex items-center bg-gray-100 rounded-l-md border border-white justify-center w-12 h-12 text-white"
				:class="(text.length > 0) ? '' : 'cursor-not-allowed'" :disabled="text.length === 0">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-900" fill="none" viewBox="0 0 24 24"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
				</svg>
			</button>
		</div>

		<div class="w-full">
			<input :type="props.type"
				class="w-full h-12 px-4 py-1 rounded-r-md border border-gray-100 text-gray-800 focus:outline-none"
				:placeholder="props.placeholder" v-model="text" @change="onChange" />
		</div>
	</div>
</template>

<script setup>
import { ref, defineEmits, defineProps } from "vue";

const text = ref("");

const emit = defineEmits(['change']);
const onChange = () => {
	emit('change', text);
};

const props = defineProps({
	placeholder: String,
	type: String
});

</script>

<style lang="scss"></style>