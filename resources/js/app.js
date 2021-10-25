require('./bootstrap');

import * as Vue from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import App from './vue/App.vue';
import '../css/app.css';

const app = Vue.createApp(App);

app.mount('#app');

createInertiaApp({
    resolve: name => require(`./vue/${name}`),
    setup({ el, app, props }) {
        Vue.createApp({ render: () => Vue.h(app, props) })
            .mount(el)
    }
});
