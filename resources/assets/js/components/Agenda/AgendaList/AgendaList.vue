<template>
<div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row ">
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
      }
    },
    mounted() {
      AgendaItem.all((agendaItems) => {
        this.agendaItems = agendaItems;
      });
    }
  }

</script>