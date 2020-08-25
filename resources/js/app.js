require("./bootstrap");

import Vue from "vue";
import VueRouter from "vue-router";
import HomePage from "./components/HomePage";
import Read from "./components/Read";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    router: [
        {
            path: "/admin/dashboard",
            name: "read",
            components: Read,
            props: true
        }
    ]
});

const app = new Vue({
    el: "#app",
    router,
    components: { HomePage }
});
