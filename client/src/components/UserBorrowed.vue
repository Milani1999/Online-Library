<template>
  <Navbar />
  <div class="borrowed_page">
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
        <tr v-for="borrow in result" v-bind:key="borrow.id">
          <td scope="row">{{ borrow.book.id }}</td>
          <td>{{ borrow.book.title }}</td>
          <td>{{ borrow.book.description }}</td>
          <td>{{ borrow.book.type }}</td>
          <td>{{ borrow.book.price }}</td>
          <td><button class="btn btn-secondary" @click="returnBook(borrow.book.id)">Return</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
  
<script>
import axios from "axios";
import Navbar from "./Navbar.vue"

export default {
  name: "BorrowedBooks",
  components: { Navbar },
  data() {
    return {
      result: [],
    };
  },
  created() {
    this.fetchBrwdBooks();
  },
  methods: {
    fetchBrwdBooks() {
      const user = JSON.parse(localStorage.getItem("userInfo"));
      const userId = user.id;
      console.log(userId)
      axios.get(`users/${userId}/borrowed_books`).then(({ data }) => {
        this.result = data;
      });
    },
    returnBook(bookId) {

      axios.post(`books/${bookId}/return`).then((response) => {
        alert(response.data.message);
        this.fetchBrwdBooks();
      }).catch((error) => {
        alert(error);
      });
    },
  },
};
</script>
  
  