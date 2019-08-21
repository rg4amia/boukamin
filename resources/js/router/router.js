import VueRouter from 'vue-router'

// Home Pages
import Home from '../views/home_page/Home'
import HomeV2 from '../views/home_page/HomeV2'
import HomeV3 from '../views/home_page/HomeV3'
import About from '../views/About'

// Routes
const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
        meta: {
            auth: undefined
        }
    },
    {
        path: '/home-2',
        name: 'home-2',
        component: HomeV2,
        meta: {
            auth: undefined
        }
    },
    {
        path: '/home-3',
        name: 'home-3',
        component: HomeV3,
        meta: {
            auth: undefined
        }
    },
    {
        path: '/about',
        name: 'about',
        component: About,
        meta: {
            auth: undefined
        }
    }
];

const router = new VueRouter({
    history: true,
    mode: 'history',
    routes,
});

export default router
