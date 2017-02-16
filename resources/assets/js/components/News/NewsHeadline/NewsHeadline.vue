<template>
	<div>
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' v-if="news != null">
			<div class='image' style='width: 100%; height: 300px;'>
				<img class='width-auto' src='images/bbq.png'/>
			</div>

			<div class='border-top border-accent'>
				<div class='col-lg-7 bg-accent'>
					<h2 class='text-color-light space-inside-sm text-center'>{{ news.title }}</h2>
				</div>

				<div class='col-lg-5 space-inside-sm'>
					<h2 class='text-color-light block text-right'>{{ news.publish_year }}</h2>
					<h3 class='text-color-light block text-right'>{{ news.publish_day }} {{ news.month_name }} </h3>
				</div>
			</div>

			<div class='col-lg-12'>
				<p class='text-color-light'>
					{{ news.body }}
				</p>

				<button class="font-sm text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light space-outside-up-xs">LEES MEER</button>
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
