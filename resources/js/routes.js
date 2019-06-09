import Vue from 'vue';
import VueRouter from 'vue-router';

import home from '@/js/components/home';
import about from '@/js/components/about';
import login from '@/js/components/login';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: home,
        },
        {
            path: '/about',
            name: 'about',
            component: about
        },
        {
            path: '/login',
            name: 'login',
            component: login
        }
    ]
});

export default router;
