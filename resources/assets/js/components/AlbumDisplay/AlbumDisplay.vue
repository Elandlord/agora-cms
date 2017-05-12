<template>
<div class="container">
  <div class="row">

  <image-slider style="height: 100%">
    <slide overlay="true" >
      <div slot="content"
        class="
          container
          text-center
          no-overflow
          lg-space-inside-up-xl md-space-inside-up-xl
      ">
        <h1
            class="
              text-color-light
              lg-space-outside-up-xl md-space-outside-up-xs xs-space-outside-up-xs space-inside-up-xl
              hidden-xs
              wow fadeInLeft animated
          " data-wow-duration="2s">


            <span> PRJCT </span> Amsterdam
          </h1>

      </div>
      <img slot='background'  src="/images/agora2.png">
    </slide>
  </image-slider>
  </div>
</div>
</template>

<script type="text/javascript">
  export default {
    mounted() {
      this.init();
    },
    data() {
      return {
        album: null,
      }
    },
    methods: {
      init() {
        this.initEvents();
      },

      initEvents() {
        Event.listen('album:display', (album) => {
          this.album = album;
        });
      }
    }

  }
</script>