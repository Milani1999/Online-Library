<template>
    <nav class="navbar navbar-expand-lg bg-dark">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <router-link to="/books" class="nav-link">Books List</router-link>
            </li>
            <li class="nav-item">
                <router-link to="/borrowed" class="nav-link">Borrowed Books</router-link>
            </li>
            <li class="nav-item">
                <router-link to="/about" class="nav-link" @click="logout">Logout</router-link>
            </li>
        </ul>
    </nav>
</template>

<script>
import "../assets/styles.css"

export default {
    name: "Navbar",
    methods: {
        logout() {
            localStorage.removeItem("userInfo");
            this.$router.push({ path: "/login" });
        }
    }
};
</script>

