import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';

import App from "./components/App";

require('./bootstrap');

Vue.use(BootstrapVue);

const app = new Vue({
    name: "App",
    el: '#app',
    components: {
        App,
    },
    render: h => h(App),
});
