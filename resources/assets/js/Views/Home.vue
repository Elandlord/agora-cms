<template>
	<div>
		<homepage-banner></homepage-banner>

		<div class='bg-main container-fluid'>
			<div class='row space-outside-md'>
				<div class='col-lg-6 text-center space-inside-left-xl'>
					<h1 class='text-color-light'>AGENDA</h1>
				</div>
				<div class='col-lg-6 text-center space-inside-right-xl'>
					<h1 class='text-color-light'>NIEUWS</h1>
				</div>
			</div>
		</div>

		<div class='achtergrond-content ' style='min-height:500px;'>
      <div class="container">
        <div class='row'>
          <div class="col-lg-6 space-inside-up-md">
            <agenda-list></agenda-list>
          </div>
        </div>
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