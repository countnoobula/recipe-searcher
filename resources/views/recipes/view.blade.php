@extends('layout')

@section('content')
	<script>
		Citadel.loading(true);
	</script>

	<div style="width: 80%; margin-left: auto; margin-right: auto;">
		<span class="fa fa-arrow-left" style="font-size: 40px; cursor: pointer;" onclick="window.location='{{ route('recipes') }}'"></span>
		<h1 style="display: inline" id="title">Recipe Title</h1>

		<hr />

		<div class="row">
			<div class="small-3 columns">
				<img src="http://placehold.it/250x250" id="hero-image">
				<ul>
					<li>Stars: <span id="stars">0.0</span></li>
					<li>Reviews: <span id="reviews">0</span></li>
				</ul>
			</div>

			<div class="small-4 columns">
				<h3>Ingredients</h3>
				<ul style="border-right: 1px solid #CCC" id="ingredients">
					
				</ul>
			</div>

			<div class="small-5 columns">
				<h3>Instructions</h3>
				<div id="instructions">
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function() {
			Recipes.viewRecipe({{ $recipeID }});
		});
	</script>
@stop
