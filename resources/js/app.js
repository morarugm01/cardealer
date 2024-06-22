import './bootstrap';

import { createApp } from 'vue' 
import CarsIndex from './components/Cars/Index.vue'


createApp({}) 
    .component('CarsIndex', CarsIndex)
    .mount('#app')