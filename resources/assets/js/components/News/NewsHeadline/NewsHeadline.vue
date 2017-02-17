<template>
	<div >
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 reset-padding' v-if="news != null">
			<div class='image' style='width: 100%;'>
				<img class='width-auto' src='images/bbq.png'/>
			</div>

			<div class='border-top border-accent '>
				<div class='bg-accent reset-padding inline-block space-inside-sides-lg'>
					<h2 class='text-color-light space-inside-sm text-center text-uppercase'>{{ news.title }}</h2>
				</div>

				<div class='space-inside-right-xs  inline-block right'>
					<h2 class='text-color-light block text-right space-inside-up-xs'>{{ news.publish_year }}</h2>
					<h3 class='text-color-light block text-right font-sm text-uppercase'>{{ news.publish_day }} {{ news.month_name }} </h3>
				</div>
			</div>

			<div class='col-lg-12 reset-padding'>
				<p class='text-color-light space-inside-sm'>
					{{ news.body }}
				</p>

				<button class="font-sm text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light space-outside-up-xs space-outside-down-lg">LEES MEER</button>
			</div>
		</div>



	</div>
</template>

<script>
    export default {

    	props: {
    		news: null,
    	},

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
