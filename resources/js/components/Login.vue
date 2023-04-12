<template>
	<div>
		<div v-if="!me" class="flex justify-end gap-5 px-10 items-center">
			<Input @change="(value) => state.email = value" placeholder="email" type="email" />
			<Input @change="(value) => state.password = value" placeholder="password" type="password" />
			<button @click="login"
				class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
				Login
			</button>
			{{ me?.email }}
		</div>
		<div v-else class="flex justify-end gap-5 px-10 items-center pt-5">
			<button @click="logout"
				class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
				Logout
			</button>
		</div>
	</div>
</template>

<script setup>
import { reactive, computed } from "vue";
import { useStore } from "vuex";

import Input from "./base/Input.vue";

const store = useStore();
const me = computed(() => store.getters['users/me']);
const state = reactive({
	email: "",
	password: ""
});

const login = async () => {
	store.dispatch('users/login', state);
};


const logout = () => {
	store.commit('users/LOGOUT');
}
</script>
<style lang="scss"></style>