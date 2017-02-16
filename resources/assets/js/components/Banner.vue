<template>
	<div class='text-over-image hidden-xs'>
    	<img class='text-color-white' src='images/agora-banner-pagina.jpg' />
        <h2> {{ title }} </h2>
    </div>
</template>

<script>
    export default {

        props: {
            title: null,
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
