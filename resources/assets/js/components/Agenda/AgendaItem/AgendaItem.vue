<template>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  space-outside-up-sm ">
      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 reset-padding "  >

        <div class="bg-main text-center space-inside-xs">
          <h1 class="text-color-light font-lg xs-font-md text-bold text-uppercase space-inside-xs">
             {{ agendaItem.day_name | toShortDayName }}
            <span class="font-sm text-light block xs-inline-block"> {{ agendaItem.day }} {{ agendaItem.month_name | toShortDateName }}</span>
            <span class="font-sm inline-block visible-xs">{{ agendaItem.time_start | toTime }} UUR</span>
          </h1>
        </div>

        <div class="">
          <p class="text-color-light space-inside-sides-xs space-inside-xs text-bold hidden-xs">
            {{ agendaItem.time_start | toTime }}
            <span class="text-bold"> UUR </span>
          </p>
        </div>
      </div>

      <div class="bg-light-opacity-lg relative inline-block col-lg-11 col-md-11 col-sm-11 col-xs-12 reset-padding">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 reset-padding border-left border-main">
          <div   class="image bg-secondary relative no-overflow">
            <img  style="height: 100%;" :src="agendaItem.thumbnail">
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 reset-padding space-inside-sides-sm space-inside-sm">
          <h1 class="text-color-light font-lg space-outside-down-sm"> {{ agendaItem.title }} </h1>
          <p class="text-color-light" v-if="trimtext == 'yes'"> {{ agendaItem.description | cutString | addDots }} </p>
          <p class="text-color-light" v-if="trimtext == 'no'"> {{ agendaItem.description }} </p>
        </div>

        <a :href="'#/agenda/page/' +agendaItem.id"  style="left: 53%; bottom: 10px;" class="font-sm position-bottom-center hidden-xs   text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light">Lees meer</a>

        <a :href="'#/agenda/page/' + agendaItem.id"  class="font-sm visible-xs space-outside-sm space-outside-sides-sm  text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light">Lees meer</a>

      </div>
  </div>
</template>

<style >
h1.custom-h1 {
  position: relative;
  right: 4px;
}
</style>

<script type="text/javascript">
export default {
  props: {
    agendaItem: null,
    trimtext: null,
  },
  filters: {
    toTime(time) {
      return time.substring(0, 5)
    },
    toShortDateName(date) {
      return date.substring(0,3);
    },
    toShortDayName(dayName) {
      return dayName.substring(0,2)
    },
    cutString(str){
      return str.substring(0, 90);
    },
    addDots(str){
      if(str.length > 85) {
        return str + '...';
      }
      return str;
    }

  },
  mounted() {
    console.log('agenda-item is mounted');
  }
}
</script>