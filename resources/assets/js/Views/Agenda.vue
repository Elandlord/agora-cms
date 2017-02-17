<template>
	<div>

		<banner title="AGENDA">
		</banner>

		<divider-content></divider-content>

		<div class='achtergrond-content' style='min-height:500px;'>
			<div class='container'>
				<div class="col-lg-12 space-outside-up-md">
					<h2 class='text-color-light inline'>FILTER</h2> <i class="text-color-light fa fa-caret-right fa-2x space-inside-left-xs inline" aria-hidden="true"></i>

					<h2 class='text-color-light inline border border-light space-inside-sides-xs space-outside-left-lg'>TAG1</h2> 

					<h2 class='text-color-light inline border border-light space-inside-sides-xs space-outside-left-sm'>TAG2</h2> 
				</div>
			</div>

			<div class='container'>
				<div class="col-lg-12 space-outside-up-md">
					<i class="text-color-light fa fa-caret-right fa-2x space-inside-left-xs inline" aria-hidden="true"></i>

					
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