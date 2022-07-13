<template>
    <div class="container text-center mt-3">
        <router-view></router-view>
        <h1>Benvenuto nella pagina guest</h1>
        <div>
            <Posts />
        </div>
    </div>
</template>

<script>
import Posts from "../components/Posts.vue";

export default {
    name: 'App',
    components: {
        Posts,
    }
}
</script>

<style>
</style>