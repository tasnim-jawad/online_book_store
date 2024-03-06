import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import routes from './routes/routes';
import { createPinia } from 'pinia';

const pinia = createPinia()
const app = createApp({});
app.component('app', App)

app.use(routes).use(pinia).mount('#app')

