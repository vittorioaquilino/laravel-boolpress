<template>
    <div class="container text-center mt-3">
        <Header />
        <router-view></router-view>
    </div>
</template>

<script>

import Header from "../components/Header.vue";

export default {
    name: 'App',
    components: {
        Header,
    }
}
</script>

<style>
</style>