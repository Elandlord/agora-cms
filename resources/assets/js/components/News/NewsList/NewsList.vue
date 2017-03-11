<template>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <news-headline  :news='newsHeadline' ></news-headline>
        <news-item v-for="item in news" :news='item' class='space-outside-up-sm'></news-item>
    </div>
</template>

<script>
	import News from '../../../Models/News';

    export default {

    	data() {
		   return {
		      news: null,
              newsHeadline: null,
		   }
		},

        mounted() {
            console.log('Component mounted.');

            News.all((news) => {
                for(let index in news) {
                    // news[index].with('photo', () => {

                    // });
                }
                this.newsHeadline = news.shift();
                this.news = news;
            });
        }
    }
</script>
