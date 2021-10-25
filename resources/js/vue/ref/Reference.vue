<template>
  <Navbar />
  <h1>This is Reference.vue</h1>
</template>

<script>
import Navbar from "../nav/Navbar.vue";
export default {
  components: {
    Navbar,
  },
};
</script>

<style scoped>
h1 {
  @apply mt-32;
}
</style>
