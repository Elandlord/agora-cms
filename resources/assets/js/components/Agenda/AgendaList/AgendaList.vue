<template>
<div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row ">
      <agenda-item> </agenda-item>
    </div>
  </div>
</div>
</template>

<style lang="sass">

</style>

<script type="text/javascript">

  export default {
    mounted() {
      AgendaItem.all(() => {
        this.agendaItems = agendaItems;
      });
    }
  }

</script>