<template>
    <nav>
        <a href="/">Home</a>
        <a href="/ref">References</a>
        <a href="/guide">Guides</a>
        <a href="/seq">Sequences</a>
        <a href="/arcitecture">Arcitectures</a>
        <a href="/vitals_api">API</a>
        <a href="/entities">Entities</a>
        <a href="/wireframes">Wireframes</a>
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
