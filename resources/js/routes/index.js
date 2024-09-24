import { createRouter, createWebHistory } from 'vue-router';
import CarsIndex from '@/Pages/Cars/Index.vue'
import Homepage from '@/Pages/Homepage.vue';
import AboutUs from '../Pages/About.vue';
import Contact from '../Pages/Contact.vue';


const routes = [
    {
        path: '/', 
        component: Homepage,
        name: 'homepage'
    },
    {
        path: '/cars', 
        component: CarsIndex,
        name: 'cars'
    },
    {
        path: '/about-us',
        component: AboutUs,
        name: 'about-us',
    },
    {
        path: '/contact',
        component: Contact,
        name: 'contact',
    }
]

export default  createRouter({
    history: createWebHistory(),
    routes
})