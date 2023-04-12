<template>
	<div class="flex justify-end gap-5 px-10 items-center">
		<Input @change="(value) => state.email = value" placeholder="email" type="email" />
		<Input @change="(value) => state.password = value" placeholder="password" type="password" />
		<button @click="onClick"
			class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
			Login
		</button>
	</div>
</template>
<script setup>
import Input from "./base/Input.vue";
import { reactive } from "vue";

const state = reactive({
	email: "",
	password: ""
});

const onClick = () => {
	console.log(state.email)
};

</script>
<style lang="scss"></style>