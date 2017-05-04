<template>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <news-headline  :news='newsHeadline' ></news-headline>
        <news-item v-for="item in news" :news='item' class='space-outside-up-sm'></news-item>
    </div>
</template>

<script>
	import News from '../../../Models/News';

    export default {

        props: {
         limit: null,
        },

    	data() {
		   return {
		      news: null,
              newsHeadline: null,
		   }
		},

        mounted() {
            console.log('Component mounted.');

            News.all((news) => {
                this.newsHeadline = news.shift();

                if(this.limit != null){
                    this.news = news.splice(0, this.limit);
                }else{
                    this.news = news;
                }

            });
        }
    }
</script>
