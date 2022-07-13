<template>
  <section>
      <h2>Questa è la pagina blog</h2>
      <Posts />
  </section>
</template>

<script>
import Posts from "../components/Posts.vue";

export default {
    name: "Blog",
    components: {
        Posts
    }
}
</script>

<style>

</style>