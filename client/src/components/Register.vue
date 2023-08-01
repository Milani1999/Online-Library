<template>
  <form @submit.prevent="saveData">
    <div class="body">
      <div class="glass">
      <div class="logincard">
        <h1 class="heading">E-Library</h1>
        <h3 class="login-heading">Register</h3>
        <div class="form-group">
          <input type="text" class="form-control" v-model="user.name" placeholder="full name" name="name" id="name" />
        </div>
        <div class="form-group">
          <input type="email" class="form-control" v-model="user.email" placeholder="email" name="email" id="email" />
        </div>
        <div class="form-group">
          <input type="text" class="form-control" v-model="user.password" placeholder="password" name="password"
            id="password" />
        </div>
          <router-link :to="{ path: 'login'}" class="link">Already have an account?</router-link>
        <button class="btn btn-dark btn-block" type="submit" value="submit">
          Register
        </button>
      </div>
    </div>
  </div>
  </form>
</template>
  
<script>
import axios from "axios";
import "../assets/styles.css"

export default {
  name: "Register",
  data() {
    return {
      result: {},
      user: {
        name: "",
        email: "",
        password: "",
      },
    };
  },
  created() { },
  mounted() {
  },
  methods: {
    saveData() {
      axios.post("register", this.user).then(({ data }) => {
        try {
          localStorage.setItem("userInfo", JSON.stringify(data));
          alert("Login Succesful");
          this.$router.push({ path: "/books" });
        } catch (err) {
          alert("failed");
        }
      });
    },
  },
};
</script>
