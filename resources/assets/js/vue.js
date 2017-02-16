import VueRouter from 'vue-router';

Vue.component('image-display', require('./components/ImageDisplay.vue'));
Vue.component('image-uploader', require('./components/ImageUploader.vue'));
Vue.component('cropper', require('./components/Cropper.vue'));


Vue.component('example', require('./components/Example.vue'));
Vue.component('navigation', require('./components/Navigation.vue'));
Vue.component('homepage-banner', require('./components/HomepageBanner.vue'));
Vue.component('banner', require('./components/Banner.vue'));
Vue.component('bottom-footer', require('./components/Footer.vue'));
Vue.component('info-footer', require('./components/InfoFooter.vue'));
Vue.component('divider-content', require('./components/DividerContent.vue'));

// Agenda components
// Vue.component('agenda-list', require('./components/AgendaComponents/AgendaList.vue'));

// News components
Vue.component('news-list', require('./components/News/NewsList/NewsList.vue'));
Vue.component('news-headline', require('./components/News/NewsHeadline/NewsHeadline.vue'));
Vue.component('news-item', require('./components/News/NewsItem/NewsItem.vue'));

import router from './routes';

new Vue({
    el: '#app',
    router
});