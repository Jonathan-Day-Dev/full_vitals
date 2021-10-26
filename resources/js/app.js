require('./bootstrap');

import * as Vue from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import '../css/app.css';
import { createRouter, createWebHistory } from 'vue-router';

import App from './vue/App.vue';
import Home from './vue/home/Home.vue';
import Reference from './vue/ref/Reference.vue';
import Guide from './vue/guide/Guide.vue';
import Sequence from './vue/seq/Sequence.vue';
import Arcitecture from './vue/arcitecture/Arcitecture.vue';
import Api from './vue/api/Api.vue';
import Entities from './vue/entities/Entities.vue';
import Wireframes from './vue/wireframes/Wireframes.vue';

const app = Vue.createApp(App);

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: Home },
        { path: '/ref', component: Reference },
        { path: '/guide', component: Guide },
        { path: '/seq', component: Sequence },
        { path: '/arcitecture', component: Arcitecture },
        { path: '/vitals_api', component: Api },
        { path: '/entities', component: Entities },
        { path: '/wireframes', component: Wireframes }
    ]
});

app.use(router);

app.mount('#app');

createInertiaApp({
    id: "app",
    resolve: name => require(`./vue/${name}`),
    setup({ el, app, props, plugin }) {
        Vue.createApp({ render: () => Vue.h(app, props) })
            .use(plugin)
            .mount(el)
    }
});
