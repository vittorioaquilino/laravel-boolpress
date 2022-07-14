import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home.vue";
import About from "./pages/About.vue";
import Contact from "./pages/Contact.vue";
import Blog from "./pages/Blog.vue";
import NotFound from "./pages/NotFound.vue";
import SinglePost from "./pages/SinglePost.vue";

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/about',
            name: 'about',
            component: About
        },
        {
            path: '/contact',
            name: 'contact',
            component: Contact
        },
        {
            path: '/blog',
            name: 'blog',
            component: Blog
        },
        {
            path: '/blog/:slug',
            name: 'single-post',
            component: SinglePost
        },
        {
            path: '/*',
            component: NotFound
        }

    ]
});

export default router;
