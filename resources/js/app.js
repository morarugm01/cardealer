import './bootstrap.js';

import { createApp } from 'vue' 
import CarsIndex from './Pages/Cars/Index.vue'
import Homepage from './Pages/Homepage.vue';


createApp({}) 
    .component('CarsIndex', CarsIndex)
    .component('Homepage', Homepage)
    .mount('#app')