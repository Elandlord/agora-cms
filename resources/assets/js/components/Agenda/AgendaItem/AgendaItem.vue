<template>
<div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
    <div class="border-bottom border-accent reset-padding">
      <div  style="position: relative; top: 1px" class="inline-block space-inside-sides-xs space-inside-xs bg-accent reset-padding">
        <h1 class="text-color-light block custom-h1 reset-padding">
          ZA
        </h1>
        <span class="text-center text-color-light text-bold block  text-uppercase custom-span">
          3 dec
        </span>
      </div>
      <div class="inline-block text-color-light space-inside-xs space-inside-sides-xs">
        <p class="text-bold text-color-light">14.00</p>
        <p class="text-bold text-uppercase text-color-light">uur</p>
        </div>
    </div>
    <div class="bg-secondary relative inline-block">
      <div class="col-lg-6 col-md-6 col-sm-6 reset-padding">
        <div  class="image bg-secondary">
          <img class="width-auto" src="/images/test.jpg">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 reset-padding  space-inside-sides-sm space-inside-up-sm">
        <h2 class="text-uppercase text-color-light space-outside-down-sm">Kinder disco</h2>
        <p class="font-sm text-light text-color-light space-outside-down-sm">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis egestas lacus. Vivamus imperdiet leo arcu, sit amet dignissim mauris ultricies vitae.
        </p>

      </div>
      <button  style="left: 52%; bottom: 10px;" class="font-sm position-bottom-center hidden-xs  text-uppercase space-inside-sides-sm space-inside-xs bg-accent border-none text-color-light">Lees meer</button>
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
  mounted() {
    console.log('agenda-item is mounted');
  }
}
</script>