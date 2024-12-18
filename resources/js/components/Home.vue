<template>
    <div>
        <h1>Welcome to the Home Page!</h1>
        <router-link to="/about">Go to About Page</router-link>
    </div>
</template>

<script>
export default {
    name: 'Home',
};
</script>

<style scoped>
h1 {
    color: green;
}
</style>