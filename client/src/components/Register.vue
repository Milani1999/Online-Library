<template>
  <form @submit.prevent="saveData">
    <div class="body">
      <div class="logincard">
        <h1 class="heading">E-Library</h1>
        <h3 class="login-heading">Login</h3>
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" class="form-control" v-model="user.name" placeholder="full name" name="name" id="name" />
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" v-model="user.email" placeholder="email" name="email" id="email" />
        </div>
        <div class="form-group">
          <label> Password </label>
          <input type="text" class="form-control" v-model="user.password" placeholder="password" name="password"
            id="password" />
        </div>
        <div class="link">
          <router-link :to="{ path: 'login' }">Already have an account?</router-link>
        </div>
        <button class="btn btn-dark btn-block" type="submit" value="submit">
          Register
        </button>
      </div>
    </div>
  </form>
</template>
  
<script>
import axios from "axios";

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
          this.$router.push({ path: "/Books" });
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

.logincard .btn {
  margin-top: 20px;
  width: 100%;
}

.link {
  padding-top: 10px;
}
</style>