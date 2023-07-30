<template>
  <form @submit.prevent="handleSubmit">
    <div class="body">
      <div class="logincard">
        <h1 class="heading">E-Library</h1>
        <h3 class="login-heading">Login</h3>
        <div class="form-group">
          <label>Username</label>
          <input
            type="text"
            class="form-control"
            v-model="username"
            placeholder="usename"
          />
        </div>
        <div class="form-group">
          <label> Password </label>
          <input
            type="text"
            class="form-control"
            v-model="password"
            placeholder="password"
          />
        </div>
        <button class="btn btn-dark btn-block">Login</button>
      </div>
    </div>
  </form>
</template>

<script>
// import axios from "axios";

export default {
  name: "Login",
  data() {
    return {
      username: "",
      password: "",
    };
  },
  // methods: {
  //   async handleSubmit() {
  //     const response = await axios.post('Login', {
  //       username: this.username,
  //       password: this.password,
  //     });
  //     console.log(response);
  //   },
  // },
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

.logincard{
  background-color: rgba(243, 241, 241);
  width: 30%;
  padding: 55px;
  border-radius: 50px;
}

.heading, .login-heading{
  text-align: center;
  padding-bottom: 20px;
}

label{
  padding-top: 10px;
  font-weight: bold;
}

.btn{
  margin-top: 20px;
  width: 100%;
}

</style>