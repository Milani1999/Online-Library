import { createRouter, createWebHistory } from "vue-router";
import Login from "./components/Login";
import Register from "./components/Register"
import Books from "./components/Books"
import UserBorrowed from "./components/UserBorrowed"

const routes = [
  { path: "/", component: Register },
  { path: "/login", component: Login },
  { path: "/books", component: Books },
  { path: "/borrowed", component: UserBorrowed },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
