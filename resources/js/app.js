import './bootstrap.js';

import { createApp } from 'vue' 
import App from './layouts/App.vue' 
import router from './routes/index.js'

createApp(App) 
    .use(router)
    .mount('#app')