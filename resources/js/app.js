import AddRecurrentService from './components/AddRecurrentService';

require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    components: {AddRecurrentService}
});
