<template>
	<div>

		<generic-page title="OVER ONS">
			<div class='container'>
				<div class='row space-outside-up-md'>
					<div class='col-lg-4'>
						<div class='image'>
							<img src='images/agora4.png' class='border-right border-main sm-border-none xs-border-none' />
						</div>
					</div>

					<div class='col-lg-6'>

						<h1 class='text-color-light xs-font-lg xs-text-center xs-space-outside-up-sm'>ONDER CONSTRUCTIE</h1>

						<p class='space-outside-up-md text-color-light'>
							Onder constructie
						</p>

					</div>

				</div>

				<div class='row space-outside-up-md'>
					<div class='col-lg-4'>

					</div>

					<div class='col-lg-6'>

						<h1 class='text-color-light'>ONDER CONSTRUCTIE</h1>

					</div>

				</div>

				<div class='row space-outside-up-md'>

					<div class='col-lg-4 reset-padding'>

					<img src='images/agora5.png' class='border-right border-accent sm-border-none xs-border-none' />

					</div>

					<div class='col-lg-6 reset-padding'>

						<h3 class='text-color-light inline-block bg-accent space-inside-sm space-inside-sides-sm'>VERBINDEND</h3>

						<p class='text-color-light space-inside-sm space-inside-sides-sm'>Onder constructie</p>

					</div>

				</div>

				<div class='row space-outside-up-md'>

					<div class='col-lg-4 reset-padding'>

					<img src='images/agora6.png' class='border-right border-accent sm-border-none xs-border-none' />

					</div>

					<div class='col-lg-6 reset-padding'>

						<h3 class='text-color-light inline-block  bg-accent space-inside-sm space-inside-sides-sm'>ONDER CONSTRUCTIE</h3>

						<p class='text-color-light space-inside-sm space-inside-sides-sm'>Onder constructie</p>

					</div>

				</div>

				<div class='row space-outside-md'>

					<div class='col-lg-4 reset-padding'>

					<img src='images/agora7.png' class='border-right border-accent sm-border-none xs-border-none' />

					</div>

					<div class='col-lg-6 reset-padding'>

						<h3 class='text-color-light inline-block  bg-accent space-inside-sm space-inside-sides-sm'>ONDER CONSTRUCTIE</h3>

						<p class='text-color-light space-inside-sm space-inside-sides-sm'>Onder constructie</p>

					</div>

				</div>
			</div>
		</generic-page>

	</div>
</template>

<script>
import Page from '../Models/Page';
import Section from '../Models/Section';

    export default {

    	data() {
    		return{
    			pageSections: null,
    		}
    	},

        mounted() {
            console.log('Component mounted.');

            Page.where({
            	name: 'OverOns'
            }, (page) => {

        	  page.with('sections', (section) => {
                return new Section(section);
              });

            	setTimeout(() => {
            		this.page = page;
            	}, 500);

              console.log(page);
            });
        }
    }
</script>