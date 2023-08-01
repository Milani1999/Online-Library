import { createRouter, createWebHistory } from "vue-router";
import Login from "./components/Login.vue";
import Register from "./components/Register"
import Books from "./components/Books.vue"

const routes = [
  { path: "/", component: Register },
  { path: "/login", component: Login },
  { path: "/books", component: Books },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
