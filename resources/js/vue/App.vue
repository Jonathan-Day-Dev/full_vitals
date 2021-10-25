<template>
  <Navbar />
  <h1 id="title">This is the App.vue file</h1>
</template>

<script>
import Navbar from "./nav/Navbar.vue";
export default {
  components: {
    Navbar,
  },
};
</script>

<style>
#title {
  @apply text-3xl text-red-500 mt-28;
}
</style>
