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

// Agenda components
Vue.component('agenda-list', require('./components/Agenda/AgendaList/AgendaList.vue'));
Vue.component('agenda-item', require('./components/Agenda/AgendaItem/AgendaItem.vue'));

import router from './routes';

new Vue({
    el: '#app',
    router
});