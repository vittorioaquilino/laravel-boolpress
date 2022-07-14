<template>
    <section>
        <div class="card mb-3">
            <div class="card-body">
                <p>Categoria: {{ categoryName }}</p>
                <h5 class="card-title">{{ post.title }}</h5>
                <p class="card-text">
                {{ troncateText(post.content, 70) }}
                </p>
            </div>
            <div class="card-body">
                <router-link :to="{ name: 'single-post', params: { slug: post.slug } }" class="card-link">Leggi post</router-link>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "PostCard",
    props: {
        post: Object
    },
    computed: {
        categoryName() {
            return this.post.category ? this.post.category.name : "nessun categoria";
        }
    },
    methods: {
        troncateText(word, maxWord) {
        if (word.length > maxWord) {
            return word.substr(0, maxWord) + "...";
        }
        return word;
        },
    }
}
</script>

<style>

</style>