<template>
  <nav class="navbar bg-main navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse bg-main navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav space-outside-left-xl">
          <li>
            <a class="bg-main text-color-light font-md" href="agenda">AGENDA<span class="sr-only">(current)</span></a>
          </li>
          <li>
            <a class="bg-main text-color-light font-md" href="nieuws">NIEUWS</a>
          </li>
          <li>
            <a class="bg-main text-color-light font-md" href="fotos">FOTO'S</a>
          </li>
        </ul>

        <div class='logo-center hidden-xs'>
          <a href='/'><img src='images/agora-logo.png'/></a>
        </div>

        <ul class="nav navbar-nav navbar-right space-outside-right-xl">
          <li>
            <a class="bg-main text-color-light font-md" href="over-ons">OVER ONS</a>
          </li>
          <li>
            <a class="bg-main text-color-light font-md" href="ruimtes">RUIMTES</a>
          </li>
          <li>
            <a class="bg-main text-color-light font-md" href="contact">CONTACT</a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
