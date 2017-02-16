<template>
	<div>

		<banner title='RUIMTES'> </banner>

		<divider-content></divider-content>

		<div class='achtergrond-content' style='min-height:500px;'>
		<!-- start container -->
			<div class='container'>

				<!-- intro text on page -->
				<div class='row'>
					<div class='col-lg-12 space-outside-md'>
						<h2 class='text-color-light'>AGORA biedt u graag verschillende voorzieningen, waar u gebruik van kunt maken.
						Voor meer informatie zijn wij te bereiken op:</h2>
					</div>
				</div>
				<!-- end intro text -->


				<!-- start first box -->
				<div class='row space-outside-up-md'>
					<!-- div with opacity -->
					<div class='inline-block bg-light-opacity-lg '>
						<div class='col-lg-4 reset-padding'>
							<img src='images/agora5.png' class='border-right border-main' />
						</div>
						<div class='col-lg-6 reset-padding'>

							<h3 class='text-color-light inline-block bg-main space-inside-sm space-inside-sides-sm'>THEATER</h3>

							<p class='text-color-light space-inside-sm space-inside-sides-sm'>Een grote zaal met podium waar feesten in kunnen worden gehouden voor minimaal 50 mensen. Hier is licht en geluid aanwezig voor theater en muziek.</p>

							<button class="font-sm text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light inline space-outside-sm space-outside-sides-sm">MEER INFO</button>

						</div>
					</div>
				</div>
				<!-- end first box -->

				<!-- start second box -->
				<div class='row space-outside-up-md'>
					<div class='inline-block bg-light-opacity-lg '>
						<div class='col-lg-4 reset-padding'>
							<img src='images/agora5.png' class='border-right border-main' />
						</div>
						<div class='col-lg-6 reset-padding'>

							<h3 class='text-color-light inline-block bg-main space-inside-sm space-inside-sides-sm'>FOYER</h3>

							<p class='text-color-light space-inside-sm space-inside-sides-sm'>Een ruimte met bar om een borrel te houden of een klein feest.</p>

							<button class="font-sm text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light inline space-outside-sm space-outside-sides-sm">MEER INFO</button>

						</div>
					</div>
				</div>
				<!-- end second box -->

				<!-- start third box -->
				<div class='row space-outside-md'>
					<div class='inline-block bg-light-opacity-lg '>
						<div class='col-lg-4 reset-padding'>
							<img src='images/agora5.png' class='border-right border-main' />
						</div>
						<div class='col-lg-6 reset-padding'>

							<h3 class='text-color-light inline-block bg-main space-inside-sm space-inside-sides-sm'>VERGADERRUIMTE</h3>

							<p class='text-color-light space-inside-sm space-inside-sides-sm'>Een ruimte voor +/- 10 personen om vergaderingen in te houden. Voorgaand werden hier ook BHV-trainingen in gehouden.</p>

							<button class="font-sm text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light inline space-outside-sm space-outside-sides-sm">MEER INFO</button>

						</div>
					</div>
				</div>
				<!-- end third box -->

			<!-- end container -->
			</div>

		</div>

	</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>