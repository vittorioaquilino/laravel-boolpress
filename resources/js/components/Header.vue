<template>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <span class="navbar-brand" href="#">Boolpress</span>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li 
            v-for="(element, index) in menuLinks"
            :key="index"
            class="nav-item">
              <router-link class="nav-link" :to="{name: element.name}">{{ element.title }}</router-link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  data() {
    return {
      menuLinks: [
        {
          name: 'home',
          title: 'Home'
        },
        {
          name: 'about',
          title: 'About'
        },
        {
          name: 'blog',
          title: 'Blog'
        },
        {
          name: 'contact',
          title: 'Contatti'
        }
      ],
    }
  }
}
</script>

<style>

</style>