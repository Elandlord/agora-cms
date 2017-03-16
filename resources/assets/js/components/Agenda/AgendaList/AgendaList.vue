<template>
<div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row ">
      <agenda-headline v-if="agendaHeadline != null" :agendaItem="agendaHeadline"></agenda-headline>
      <div class="space-outside-sm clear-floats"></div>
      <agenda-item v-if="agendaItems != null" v-for="item in agendaItems" :agendaItem="item"> </agenda-item>
    </div>
  </div>
</div>
</template>

<style lang="sass">

</style>

<script type="text/javascript">
  import AgendaItem from '../../../Models/AgendaItem';

  export default {
    data() {
      return {
        agendaItems: null,
        agendaHeadline: null,
      }
    },

    mounted() {
      console.log('agenda-list component is mounted');

      AgendaItem.all((agendaItems) => {
        this.agendaHeadline = agendaItems.shift();
        this.agendaItems = agendaItems;
        console.log(this.agendaItems);
      });

    }

  }

</script>