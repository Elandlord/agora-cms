<template>
	<div class='col-lg-12 inline-block'>
		<div class='inline-block bg-light-opacity-lg '>
			<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 reset-padding'>

				<div class='image border-left border-main' style='width: 100%;'>
					<img class='width-auto' src='images/agora2.png'/>
				</div>

			</div>
			<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 reset-padding'>

				<h3 class='text-color-light space-inside-sides-sm space-inside-sm'>{{ news.title }}</h3>

				<p class='text-color-light space-inside-sides-sm'>
					{{ news.body }}
				</p>

				<div class='space-outside-sides-sm space-outside-up-sm'>
					<button class="font-sm text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light inline">LEES MEER</button>
					<h5 class='text-color-light text-right inline space-inside-sides-sm'>{{ news.publish_date }}</h5>
				</div>
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
