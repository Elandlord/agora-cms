<template>
	<div class='text-over-image hidden-xs'>
    	<img class='text-color-white' src='images/agora-banner-pagina.jpg' />
    	<slot>
    		
    	</slot>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
