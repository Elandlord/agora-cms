require('./bootstrap');
require('./admin-lte'); // pulls in the admin-lte2 admin dashboard
require('./Core/Classes'); // Pulls in some helper classes



// Core components
Vue.component('image-display', require('./components/ImageDisplay.vue'));
Vue.component('image-uploader', require('./components/ImageUploader.vue'));
Vue.component('cropper', require('./components/Cropper.vue'));

// Agora lay-out components
Vue.component('example', require('./components/Example.vue'));
Vue.component('navigation', require('./components/Navigation.vue'));
Vue.component('homepage-banner', require('./components/HomepageBanner.vue'));
Vue.component('banner', require('./components/Banner.vue'));
Vue.component('bottom-footer', require('./components/Footer.vue'));
Vue.component('info-footer', require('./components/InfoFooter.vue'));
Vue.component('divider-content', require('./components/DividerContent.vue'));
Vue.component('generic-page', require('./components/Page/GenericPage.vue'));

//Doorklikpagina's
Vue.component('news-page', require('./components/News/ClickPage/Page.vue'));

// Agenda components
Vue.component('agenda-list', require('./components/Agenda/AgendaList/AgendaList.vue'));
Vue.component('agenda-item', require('./components/Agenda/AgendaItem/AgendaItem.vue'));
Vue.component('agenda-headline', require('./components/Agenda/AgendaHeadline/AgendaHeadline.vue'));

// News components
Vue.component('news-list', require('./components/News/NewsList/NewsList.vue'));
Vue.component('news-headline', require('./components/News/NewsHeadline/NewsHeadline.vue'));
Vue.component('news-item', require('./components/News/NewsItem/NewsItem.vue'));


import router from './routes';

new Vue({
    el: '#app',
    router
});




// init plugins here
$('.datepicker').datepicker({
  format: 'yyyy-mm-dd'
});
$('.timepicker').timepicker({
  template: 'dropdown',
  showInputs: false,
  maxHours: 24,
  showMeridian: false
});

