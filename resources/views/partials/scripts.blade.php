<!-- Vue.js -->

<script src="{{ URL::asset("js/vue.js") }}"></script>
<script src="{{ URL::asset("js/app.js") }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/ekko-lightbox.min.js"></script>
<script type="text/javascript">

      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true,
                onShown: function() {
                    console.log('Eigendom van MEN Technology & Media. Dat betekent: niet in de console kijken stiekemerd!');
                }
            });
        });


</script>

