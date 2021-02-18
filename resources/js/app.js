/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';



window.Vue = require('vue');
window.EventBus = new Vue();
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('form-product', require('./components/dashboard/products/FormProduct.vue').default);
Vue.component('show-product',require('./components/dashboard/products/ShowComponent.vue').default);
Vue.component('products-container',require('./components/dashboard/products/ProductsContainerComponent.vue').default);
Vue.component('controls-audio',require('./components/audio/ControlsComponent.vue').default);
Vue.component('delete-button',require('./components/dashboard/products/DeleteButtonComponent.vue').default)
Vue.component('form-image',require('./components/dashboard/gallery/FormImage.vue').default);
Vue.component('list-gallery',require('./components/dashboard/gallery/ListGallery.vue').default);
Vue.component('video-list',require('./components/dashboard/videos/VideoList.vue').default);
Vue.component('form-video',require('./components/dashboard/videos/FormVideo.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Notifications from 'vue-notification';
import notification from './mixins/notification.js'
Vue.mixin(notification);
Vue.use(Notifications)

const app = new Vue({
    el: '#app',
    created:function() {
      
    },
    mounted:function(){
     
    }
});
