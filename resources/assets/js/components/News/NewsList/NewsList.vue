<template>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div v-if="news != null && search == 'yes'">
            <div class='col-lg-8 space-outside-md'>
              <input v-model="searchParameters" type='text' placeholder='Trefwoord..' class='
                                  form-control 
                                  bg-none
                                  text-color-light
                                  space-outside-up-xs
                                  '/>
            </div>
            <div class='col-lg-4 space-outside-md'>
              <button class="font-md text-uppercase space-inside-sides-md space-inside-sm bg-accent border-none text-color-light" @click="searchEvents()">Zoeken</button>
            </div>
        </div>
        <div class='row space-outside-md text-center' v-if="loading">
            <i class='fa fa-cog fa-spin fa-5x fa-fw text-color-accent'></i>
            <h2 class='text-color-accent space-outside-md font-md '>Nieuws laden..</h2>
        </div>
        <news-headline  :news='newsHeadline' ></news-headline>
        <news-item v-for="item in news" :news='item' class='space-outside-up-sm'></news-item>

        <div v-if="news == null">
            <h2 class='text-color-light'>Geen nieuwsberichten gevonden.</h2>
        </div>
    </div>
</template>

<script>
	import News from '../../../Models/News';

    export default {

        props: {
         limit: null,
         search: null,
         searchParameters: null,
         loading: false,
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
        },

         methods:{
            searchEvents(){

                if(this.searchParameters.length >= 3){
                  this.loading = true;

                  News.search(this.searchParameters, (news) => {

                    this.newsHeadline = news.shift();

                    if(this.limit != null){
                        this.news = news.splice(0, this.limit);
                    }else{
                        this.news = news;
                    }

                  });

                  setTimeout(() => {
                    this.loading = false;
                  }, 500);
                }else{
                  alert('Minimaal 3 tekens invoeren.');
                }

                

            }

          },
    }
</script>
