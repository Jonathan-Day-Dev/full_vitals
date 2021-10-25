<template>
    <nav>
        <router-link to="/">Home</router-link>
        <router-link to="/ref">References</router-link>
        <router-link to="/guide">Guides</router-link>
        <router-link to="/seq">Sequences</router-link>
        <router-link to="/arcitecture">Arcitectures</router-link>
        <router-link to="/vitals_api">API</router-link>
        <router-link to="/entities">Entities</router-link>
        <router-link to="/wireframes">Wireframes</router-link>
    </nav>
</template>

<script>
export default {

}
</script>

<style scoped>
nav {
    @apply flex flex-wrap justify-evenly p-4 fixed top-0 left-0 bg-blue-400 w-screen;
}
a {
    @apply flex justify-evenly items-center bg-blue-800 text-gray-300 border-2 border-red-400 border-solid px-3 py-2 w-24 no-underline font-bold rounded;
}
a:hover {
    @apply bg-gray-300 text-blue-800;
}
</style>
