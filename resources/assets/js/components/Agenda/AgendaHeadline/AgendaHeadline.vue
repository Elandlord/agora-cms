<template>
<div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
    <div class="border-bottom border-accent reset-padding">
      <div  style="position: relative; top: 1px" class="inline-block space-inside-sides-xs space-inside-xs bg-accent reset-padding">
        <h1 class="text-color-light block custom-h1 reset-padding">
          {{ agendaItem.day_name | toShortDayName }}
        </h1>
        <span class="text-center text-color-light text-bold block  text-uppercase custom-span">
          {{ agendaItem.publish_day }} {{ agendaItem.month_name | toShortDateName }}
        </span>
      </div>
      <div class="inline-block text-color-light space-inside-xs space-inside-sides-xs">
          <p class="text-bold text-color-light">{{ agendaItem.time_start | toTime }}</p>
        <p class="text-bold text-uppercase text-color-light">uur</p>
      </div>
    </div>

    <div class="bg-light-opacity-lg relative inline-block">

      <div class="col-lg-6 col-md-6 col-sm-6 reset-padding">
        <div  class="image bg-secondary">
          <img class="width-auto" src="/images/test.jpg">
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 reset-padding  space-inside-sides-sm space-inside-up-sm">
        <h2 class="text-uppercase text-color-light space-outside-down-sm">{{ agendaItem.title }}</h2>
        <p class="font-sm text-light text-color-light space-outside-down-sm">
        {{ agendaItem.description }}
        </p>
      </div>

      <button  style="left: 53%; bottom: 10px;" class="font-sm position-bottom-center hidden-xs  text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light">Lees meer</button>

      <button   class="font-sm visible-xs space-outside-sm space-outside-sides-sm  text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light">Lees meer</button>

    </div>
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