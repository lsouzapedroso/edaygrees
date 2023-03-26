/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import '../css/app.css'
import { createApp } from "vue";
import ExampleComponent from './components/ExampleComponent.vue';

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const app = createApp({});
app.component('example-component', ExampleComponent)
app.mount('#app')
