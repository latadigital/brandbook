require('./bootstrap');

window.Vue = require('vue');

Vue.component('multi-uploader', require('./components/Upload.vue').default);

const app = new Vue({
   el: '#app'
})
