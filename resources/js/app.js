require("./bootstrap");

window.Vue = require("vue");

import VueRouter from "vue-router";
Vue.use(VueRouter);

import VueAxios from "vue-axios";
import axios from "axios";
Vue.use(VueAxios, axios);

import Home from "../components/Home.vue";
import EditArticleForm from "../components/EditArticleForm.vue";
import AddArticleForm from "../components/AddArticleForm.vue";
import ArticleList from "../components/ArticleList.vue";
import App from "../js/App.vue";

const routes = [
    {
        name: "home",
        path: "/",
        component: Home,
    },
    {
        name: "create",
        path: "/create",
        component: AddArticleForm,
    },
    {
        name: "articles",
        path: "/articles",
        component: ArticleList,
    },
    {
        name: "edit",
        path: "/edit/:id",
        component: EditArticleForm,
    },
];

const router = new VueRouter({ mode: "history", routes: routes });
const app = new Vue(Vue.util.extend({ router }, App)).$mount("#app");
