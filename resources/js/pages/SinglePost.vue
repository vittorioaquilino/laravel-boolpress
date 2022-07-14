<template>
  <section v-if="post">
      <h2>{{ post.title }}</h2>
      <p>Categoria: {{categoryName}}</p>
      <div class="mb-4">
          
      </div>
      <p>{{ post.content }}</p>
  </section>
</template>

<script>
export default {
    name: "SinglePost",
    data() {
        return {
            post: null
        }
    },
    created() {
        this.getPost();
    },
    computed: {
        categoryName() {
            return this.post.category ? this.post.category.name : "nessuna";
        },
    },
    methods: {
        getPost() {
            const slug = this.$route.params.slug;
            axios.get(`/api/posts/${slug}`).then((resp) => {
                if(resp.data.success) {
                    this.post = resp.data.results;
                } else {
                    this.$router.push({ name: "not-found" });
                }
            })
        }
    },
}
</script>

<style>

</style>