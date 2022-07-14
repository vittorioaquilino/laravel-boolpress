<template>
  <div class="container">
    <h3>Lista dei post</h3>
    <div class="row row-cols-3">
      <!-- post singolo -->
      <div v-for="post in posts" :key="post.id" class="col">
        <SinglePost :post="post"/>
      </div>
      <!-- post singolo -->
    </div>
    <nav aria-label="...">
      <ul class="pagination">
        <!-- scorrimento pagine -->
        <li 
        class="page-item" 
        :class="{ disabled: currentPage === 1 }"
        >
          <a
            @click="getPosts(currentPage - 1)"
            class="page-link"
            href="#"
            tabindex="-1"
            >Previous</a
          >
        </li>
        <!-- numero di pagine -->
        <li 
        v-for="n in lastPage" 
        :key="n" class="page-item" 
        :class="{ active: currentPage === n }"
        >
          <a 
          @click="getPosts(n)" 
          class="page-link" 
          href="#">
            {{ n }}
          </a>
        </li>
        <!-- bottone successivo -->
        <li 
        class="page-item" 
        :class="{ disabled: currentPage === lastPage }"
        >
          <a 
          @click="getPosts(currentPage + 1)" 
          class="page-link" 
          href="#"
          >Next
          </a>
        </li>
      </ul>
    </nav>
    <p>Totale post trovati: {{ totalPosts }}</p>
  </div>
</template>

<script>
import SinglePost from "../components/SinglePost.vue";

export default {
     name: "Posts",
     components: {
       SinglePost
     },
  data() {
    return {
      posts: [],
      currentPage: 1,
      lastPage: 0,
      totalPosts: 0
    };
  },
  created() {
    this.getPosts(1);
  },
  methods: {
    getPosts(pageNumber) {
      axios
        .get("/api/posts", {
          params: {
            page: pageNumber,
          },
        })
        .then((resp) => {
          this.posts = resp.data.results.data;
          this.currentPage = resp.data.results.current_page;
          this.lastPage = resp.data.results.last_page;
          this.totalPosts = resp.data.results.total;
        });
    },
  },
};
</script>

<style>

</style>