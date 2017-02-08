<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">
        <title>@yield('title') || Agora</title>

        @include('partials.styles')

    </head>

    <body>

    	<div id="app">

            @include('layouts.navigation')


            <router-view>
                        
            </router-view>

            @include('partials.footer')

            @include('partials.info-footer')

    	</div>


    	@include('partials.scripts')

    </body>

</html>