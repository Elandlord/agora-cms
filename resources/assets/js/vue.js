Vue.component('image-display', require('./components/ImageDisplay.vue'));
Vue.component('image-uploader', require('./components/ImageUploader.vue'));
Vue.component('cropper', require('./components/Cropper.vue'));


Vue.component('example', require('./components/Example.vue'));
Vue.component('navigation', require('./components/Navigation.vue'));
Vue.component('homepage-banner', require('./components/HomepageBanner.vue'));
Vue.component('banner', require('./components/Banner.vue'));
Vue.component('bottom-footer', require('./components/Footer.vue'));
Vue.component('info-footer', require('./components/InfoFooter.vue'));


new Vue({
    el: '#app'
});