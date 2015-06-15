var Citadel = {};
var Recipes = {};

Recipes.API_KEY = '';

Citadel.loading = function(status) {
	if(status) {
		$('.loading').show()
	} else {
		$('.loading').hide()
	}
};

Recipes.search = function() {
	var url = "http://api.bigoven.com/recipes?pg=1&rpp=25&title_kw="
			  + $('#recipe-search').val()
			  + "&api_key=" + Recipes.API_KEY
			  + "&sort=quality";

	Citadel.loading(true);

	$.ajax({
		type: "GET",
		dataType: 'json',
		cache: false,
		url: url,
		success: function (data) {
			Recipes.loadResults(data.Results);

			Citadel.loading(false);
		}
	});
};
Recipes.loadResults = function(results) {
	Recipes.clearResults();

	for(var i = 0; i < results.length; i++) {
		var entry = $('#empty-entry').clone();
		entry.attr('id', 'recipe-' + results[i].RecipeID);
		entry.attr('recipe_id', results[i].RecipeID);
		entry.attr('onclick', 'window.location="recipes/' + results[i].RecipeID + '"')
		entry.find('.hero-image').attr('src', results[i].HeroPhotoUrl);
		entry.find('.title').html(results[i].Title);
		entry.find('.category').html(results[i].Category + ' - <small>' + results[i].Subcategory + '</small>');
		entry.find('.cuisine').html(results[i].Cuisine == null ? 'Unknown' : (results[i].Cuisine == '' ? 'Unknown' : results[i].Cuisine));
		entry.find('.stars').html(results[i].StarRating.toFixed(1) + " Stars");
		entry.find('.reviews').html(results[i].ReviewCount + " Reviews");
		Recipes.addResult(entry);
	}
};
Recipes.clearResults = function() {
	$('.search-results').children().remove();
};
Recipes.addResult = function(entry) {
	$('.search-results').append(entry);
	entry.show();
};

Recipes.viewRecipe = function(id) {
	var url = "http://api.bigoven.com/recipe/" + id + "?api_key=" + Recipes.API_KEY;
    $.ajax({
        type: "GET",
        dataType: 'json',
        cache: false,
        url: url,
        success: function(data) {
            console.log(data);

            Recipes.loadRecipe(data);
        }
    });
};
Recipes.loadRecipe = function(data) {
	$('#title').html(data.Title);
    $('#hero-image').attr('src', data.HeroPhotoUrl)

    Citadel.loading(false);
}