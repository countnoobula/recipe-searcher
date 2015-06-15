@extends('layout')

@section('content')
<br />
<div class="row">
	<div class="large-12 columns">
		<div class="row collapse">
			<div class="small-10 columns">
				<input type="text" placeholder="Recipe Search" id="recipe-search">
			</div>
			<div class="small-2 columns">
				<div class="button postfix" onclick="Recipes.search()">Go</div>
			</div>
		</div>
	</div>
</div>

<hr />

<div class="search-results">
</div>

@include('recipes.entry')

@stop
