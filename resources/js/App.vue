<template>
	<Login />
	<router-view />
</template>

<script>
import Login from "./components/Login.vue"

export default {
	name: 'App',
	components: { Login },
}
</script>

<style></style>
