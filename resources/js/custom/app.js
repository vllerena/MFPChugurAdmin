require('./bootstrap');

window.Vue = require('vue').default;

import router from "./router";
import 'vuejs-datatable/dist/themes/bootstrap-4.esm';
import { VuejsDatatableFactory } from 'vuejs-datatable';

Vue.use( VuejsDatatableFactory );
Vue.component('index-page', require('./components/IndexPage').default);
// Vue.component('select2', require('./components/select').default);

const app = new Vue({
    el: '#app',
    router
});

