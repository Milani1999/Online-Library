<template>
  <form @submit.prevent="LoginData">
    <div class="body">
      <div class="logincard">
        <h1 class="heading">E-Library</h1>
        <h3 class="login-heading">Login</h3>
        <div class="form-group">
          <label>Username</label>
          <input
            type="text"
            class="form-control"
            v-model="user.email"
            placeholder="usename"
          />
        </div>
        <div class="form-group">
          <label> Password </label>
          <input
            type="text"
            class="form-control"
            v-model="user.password"
            placeholder="password"
          />
        </div>
        <div class="link">
            <router-link :to="{ path: '/' }">Don't have an account?</router-link>
        </div>
        <button class="btn btn-dark btn-block" type="submit">Login</button>
      </div>
    </div>
  </form>
</template>

<script>
import axios from "axios";

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
  created() {},
  mounted() {
    console.log("mmmm");
  },
  methods: {
    LoginData() {
      axios.post("login", this.user).then(({ data }) => {
        console.log(data);
        try {
          if (data.status === true) {
            localStorage.setItem('userInfo', JSON.stringify(data));
            alert("Login Succesful");
            this.$router.push({ path: "/Books" });
          } else {
            alert("Login failed");
          }
        } catch (err) {
          alert("failed");
        }
      });
    },
  },
};
</script>

<style>
.body {
  background-image: url("@/assets/library.jpeg");
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.logincard {
  background-color: rgba(243, 241, 241);
  width: 30%;
  padding: 55px;
  border-radius: 50px;
}

.heading,
.login-heading {
  text-align: center;
  padding-bottom: 20px;
}

label {
  padding-top: 10px;
  font-weight: bold;
}

.btn {
  margin-top: 20px;
  width: 100%;
}
</style>