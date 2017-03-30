<template>
	<div>
		<generic-page :title='activity.title' v-if="activity != null">

            <div class='container'>
                <div class='row space-outside-md'>
                    <div class='col-lg-12'>
                        <div class='row'>

                            <div class='col-lg-12 reset-padding space-inside-sm'>
                                <a :href="'#/agenda'" class="hidden-xs font-sm text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light inline">GA TERUG</a>
                            </div>

                            <div class='col-lg-6 reset-padding'>

                                <img :src='activity.thumbnail' class='border-right border-main' />

                            </div>

                            <div class='col-lg-6 reset-padding'>
                                <div class='bg-main space-inside-sm space-inside-sides-sm inline-block'>
                                    <h2 class='text-color-light'>{{ activity.day }} {{ activity.month_name | uppercase | cutString }}</h2>

                                    <h1 class='space-inside-xs right text-color-light'>2017</h1>
                                </div>


                                <h3 class='text-color-light space-outside-up-sm space-outside-left-sm'>GENRE</h3>
                                <p class='text-color-light space-outside-left-sm'>NOG NIET AF</p>

                                <h3 class='text-color-light space-outside-up-sm space-outside-left-sm'>PRIJS</h3>
                                <p class='text-color-light space-outside-left-sm'>&euro; {{ activity.price }}</p>

                                <h3 class='text-color-light space-outside-up-sm space-outside-left-sm'>TIJD</h3>
                                <p class='text-color-light space-outside-left-sm'>{{ activity.time_start | cutTime }} tot {{ activity.time_end | cutTime }}</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class='row'>

                    <div class='col-lg-12 reset-padding'>

                        <a href="#contact" class="hidden-xs font-sm text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light">RESERVEREN</a>

                        <a  href="#contact" class="hidden-xs space-outside-left-sm font-sm text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light">EVENEMENT</a>


                    </div>

                </div>

                <div class='row space-outside-md'>

                    <div class='col-lg-12 reset-padding'>

                        <h2 class='text-color-light space-outside-down-md'>{{ activity.title | uppercase }}</h2>

                        <p class='text-color-light'>
                        {{ activity.description | nl2br}}
                        </p>

                    </div>

                </div>
            </div>

		</generic-page>
	</div>
</template>

<script>
    import Activity from '../../../Models/Activity';

    export default {

    	data(){
    		return{
    			activity: null,
    		}
    	},

        filters: {
            uppercase(str){
                return str.toUpperCase();
            },

            cutString(str){
                return str.substring(0, 3);
            },

            cutTime(str){
                return str.substring(0, 5);
            },

            nl2br(str){
               return str.split("\n").join("<br/>");
            }
        },

        beforeMount(){
            Activity.find(this.$route.params.id, (activity) => {
                this.activity = activity;
            });
        },

        mounted() {
            console.log('Component mounted.');
        }

    }
</script>
