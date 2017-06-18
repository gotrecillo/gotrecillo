
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import axios from 'axios';

Vue.filter('capitalize', window._.capitalize);

window.github = axios.create({
    baseURL: 'https://api.github.com/',
    headers: {
        'X-Requested-With': 'XMLHttpRequest'
    }
});

window.api = axios.create({
    baseURL: '/api/',
    headers: {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
});

Vue.component('github-profile', require('./components/GithubProfile'));

const app = new Vue({
    el: '#app'
});
