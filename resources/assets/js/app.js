
require('./bootstrap');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = "rfc3986";
import Buefy from 'buefy'

Vue.use(Buefy);
Vue.component('slugWidget', require('./components/slugWidget.vue'));
Vue.component('tabWidget', require('./components/tabWidget.vue'));

// var app = new Vue({
//   el: '#app',
//   data: {}
// });

require('./manage')
