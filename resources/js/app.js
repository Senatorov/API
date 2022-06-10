/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//-------------------------- Vue code --------------------------//
import Vue from 'vue'

// <Vue config>
// Vue.config.productionTip = false
// Vue.config.devtools = false
// </Vue config>

Vue.component('form-create', require('./components/Form-create').default)

const app = new Vue({
    el: '#app'
})

