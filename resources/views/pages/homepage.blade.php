@extends('master')

@section('title')
Homepage
@stop

@section('content')

<homepage-banner></homepage-banner>

<div class='bg-main container-fluid'>
	<div class='row space-outside-md'>
		<div class='col-lg-6 text-center space-inside-left-xl'>
			<h1 class='text-color-light'>AGENDA</h1>
		</div>
		<div class='col-lg-6 text-center space-inside-right-xl'>
			<h1 class='text-color-light'>NIEUWS</h1>
		</div>
	</div>
</div>

<div class='bg-secondary container-fluid' style='min-height:500px;'>
	<div class='row'>

	</div>
</div>

@stop