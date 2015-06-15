@extends('layout')

@section('content')
<div class="homeGrid">
	<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
		<li class="homeBlock">
			<a href="http://citadel:32400/web">
				<img src="http://placehold.it/250x250" />
				<h3>Plex</h3>
			</a>
		</li>

		<li class="homeBlock">
			<a href="{{ route('recipes') }}">
				<img src="http://placehold.it/250x250" />
				<h3>Recipes</h3>
			</a>
		</li>

		<li class="homeBlock">
			<a href="{{ route('unavailable') }}">
				<img src="http://placehold.it/250x250" />
				<h3>Download Requests</h3>
			</a>
		</li>
	</ul>
</div>
@stop