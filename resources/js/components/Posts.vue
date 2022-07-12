<template>
  <div class="container">
    <h2>Lista dei post</h2>
    <div class="row row-cols-3">
      <!-- post singolo -->
      <div v-for="post in posts" :key="post.id" class="col">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">{{ post.title }}</h5>
            <p class="card-text">
              {{ troncateText(post.content, 70) }}
            </p>
          </div>
        </div>
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
export default {
     name: "Posts",
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
    troncateText(word, maxWord) {
      if (word.length > maxWord) {
        return word.substr(0, maxWord) + "...";
      }
      return word;
    },
  },
};
</script>

<style>

</style>