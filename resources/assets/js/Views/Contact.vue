<template>
	<div>

		<generic-page title='CONTACT'>

			<div class='container'>
				<div class='row space-outside-down-lg'>
					<div class='col-lg-12 space-outside-md'>
						<h2 class='text-color-light text-center'>NEEM CONTACT MET ONS OP</h2>

						<form>

							<input type='text' class='form-control' />

							<input type='text' class='form-control space-outside-sm' />

							<input type='text' class='form-control' />


						</form>
					</div>
				</div>
			</div>

			<h2 class='text-color-light inline bg-accent space-inside-up-sm space-inside-sides-sm'>LOCATIE</h2>
			<h4 class='text-color-light inline right space-outside-sides-md'>Rodenburg 1B • 9351 PV Leek</h4>
			<h4 class='text-color-light inline right space-outside-sides-md'>Ma - Vr: 09:00 - 17:00</h4>
			<h4 class='text-color-light inline right space-outside-sides-md'>info@agoraleek.nl</h4>

			<div class='container-fluid'>

				<div class='divider bg-accent space-inside-sm'></div>

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2391.6223706268315!2d6.370299815831829!3d53.17081467994258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c835a3911d22df%3A0x4c2e8f57f281cd81!2sRodenburg+1B%2C+9351+PV+Leek!5e0!3m2!1snl!2snl!4v1487273076773" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>

		</generic-page>

	</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>