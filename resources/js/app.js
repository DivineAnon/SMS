require('./bootstrap');
require('../../public/js/jquery-3.4.0.min.js');
require('../../public/js/jquery.dataTables.min.js');
require('../../public/plugin/DataTables-Bootstrap4/js/dataTables.bootstrap4.min.js');
require('../../public/plugin/repeatable/jquery.repeatable.js');
require('../../public/js/popper.min.js')

window.Vue = require('vue');

import DataTable from 'laravel-vue-datatable';
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';
import CKEditor from '@ckeditor/ckeditor5-vue';

Vue.use(CKEditor);
Vue.use(DataTable, VueAxios, axios, VueRouter);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

//Sweet Alert
import Swal from 'sweetalert2';
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
window.Toast = Toast;

//Currency
import VueCurrencyFilter from 'vue-currency-filter';
Vue.use(VueCurrencyFilter);
Vue.use(VueCurrencyFilter, {
    thousandsSeparator: '.',
    fractionCount: 0,
    fractionSeparator: ',',
    symbolPosition: 'front',
    symbolSpacing: true
});

const app = new Vue({
    el: '#app'
});
