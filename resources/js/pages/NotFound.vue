<template>
  <section>
      <h2>Error 404! Pagina non trovata</h2>
      <router-link :to="{name: 'home'}">Ritorna nella pagina Home</router-link>
  </section>
</template>

<script>
export default {
    name: "NotFound"
}
</script>

<style>

</style>