import 'jquery/dist/jquery.min.js';
import 'popper.js/dist/umd/popper.min.js';
import 'bootstrap/dist/js/bootstrap.min.js';

import Vue from 'vue';

let app = new Vue({
   el: '#app',
   data: {
      firstname : "Jabrane",
      lastname  : "Jabri",
      htmlcontent : "<div><h1>Vue Js Template Sample</h1></div>"
   }
})