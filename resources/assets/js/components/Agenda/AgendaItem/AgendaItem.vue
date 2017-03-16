<template>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  space-outside-xs ">
      <div class="col-lg-1  reset-padding "  >
        <div class="bg-main text-center space-inside-xs">
          <h1 class="text-color-light font-lg text-bold text-uppercase">
             {{ agendaItem.day_name | toShortDayName }}
            <span class="font-sm text-light block"> {{ agendaItem.publish_day}} {{agendaItem.month_name | toShortDateName}}</span>
          </h1>
        </div>
        <div>
          <p class="text-color-light space-inside-sides-xs space-inside-xs text-bold">
            {{agendaItem.time_start | toTime}}
            <span class="text-bold">UUR</span>
          </p>
        </div>
      </div>

      <div class="bg-light-opacity-lg relative inline-block col-lg-11 reset-padding">
        <div class="col-lg-5 reset-padding border-left border-main">
          <div  class="image bg-secondary">
            <img class="width-auto" src="/images/test.jpg">
          </div>
        </div>

        <div class="col-lg-7 reset-padding space-inside-sides-sm space-inside-sm">
          <h1 class="text-color-light font-lg">KINDERDISCO SINTERKLAAS</h1>
          <p class="text-color-light">Je moeder is een lekker ding</p>
        </div>

        <button  style="left: 45%; bottom: 10px;" class="font-sm position-bottom-center hidden-xs  text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light">Lees meer</button>
        <button   class="font-sm visible-xs space-outside-sm space-outside-sides-sm  text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light">Lees meer</button>
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
    }

  },
  mounted() {
    console.log('agenda-item is mounted');
  }
}
</script>