<template>
  <Navbar />
  <div class="books_page">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Book ID</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Genre/Type</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="book in result" v-bind:key="book.id">
          <td scope="row">{{ book.id }}</td>
          <td>{{ book.title }}</td>
          <td>{{ book.description }}</td>
          <td>{{ book.type }}</td>
          <td>Rs. {{ book.price }}</td>
          <td><button class="btn btn-secondary" @click="borrowBook(book.id)">Borrow</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from "axios";
import Navbar from "./Navbar.vue"

export default {
  name: "Books",
  components: { Navbar },
  data() {
    return {
      result: [],
    };
  },
  created() {
    this.fetchBooks();
  },
  methods: {
    fetchBooks() {
      axios.get("books").then(({ data }) => {
        this.result = data;
      });
    },
    borrowBook(bookId) {
      const user = JSON.parse(localStorage.getItem("userInfo"));
      const userId = user.id;
      console.log(userId)

      axios.post(`books/${bookId}/borrow/${userId}`).then((response) => {
        alert(response.data.message);
        this.fetchBooks();
      }).catch((error) => {
        alert(error);
      });
    },

    logout() {
      localStorage.removeItem("userInfo");
      this.$router.push({ path: "/login" });
    }
  },
};
</script>

