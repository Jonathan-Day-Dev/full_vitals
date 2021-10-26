<template>
  <Navbar />
  <h1>This is Reference.vue</h1>
  <ul>
      <li v-for="ref in references" :key="ref.id">{{ ref.title }}</li>
  </ul>
</template>

<script>
import Navbar from "../nav/Navbar.vue";
import axios from 'axios';
export default {
  data() {
    return {
      references: [],
    };
  },
  components: {
    Navbar,
  }
};
</script>

<style scoped>
h1 {
  @apply mt-32 text-2xl;
}
</style>
