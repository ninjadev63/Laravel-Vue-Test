<template>
    <h1 class="p-4">Welcome Page from Vue</h1>
    <div class="p-4">
        <router-link to="/">Home</router-link> |
        <router-link to="/about">About</router-link>
    </div>
</template>

<script>
export default {
    name: 'Header',
}
</script>

<style scoped>
    h1, div {
        background-color: cornflowerblue;
        color: white;
    }
</style>
