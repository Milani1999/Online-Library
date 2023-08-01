<template>
  <form @submit.prevent="LoginData">
    <div class="body">
      <div class="glass">
        <div class="logincard">
          <h1 class="heading">E-Library</h1>
          <h3 class="login-heading">Login</h3>
          <div class="form-group">
            <input type="email" class="form-control" v-model="user.email" placeholder="email" />
          </div>
          <div class="form-group">
            <input type="text" class="form-control" v-model="user.password" placeholder="password" />
          </div>
            <router-link :to="{ path: '/' }" class="link">Don't have an account?</router-link>
          <button class="btn btn-dark btn-block" type="submit">Login</button>
        </div>
      </div>
    </div>
  </form>
</template>

<script>
import axios from "axios";
import "../assets/styles.css"

export default {
  name: "Login",
  data() {
    return {
      result: {},
      user: {
        email: "",
        password: "",
      },
    };
  },
  created() { },
  mounted() {
  },
  methods: {
    LoginData() {
      axios.post("login", this.user).then((response) => {
        try {
          const data = response.data;
          if (data.status === true) {
            localStorage.setItem('userInfo', JSON.stringify(data));
            alert(data.message);
            this.$router.push({ path: "/books" });
          } else {
            alert(data.message);
          }
        } catch (err) {
          alert(err.message);
        }
      });

    },
  },
};
</script>
