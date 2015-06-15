<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RecipeController extends Controller {
	
	public function search() {
		return view('recipes.search');
	}

	public function view($id) {
		return view('recipes.view')->with('recipeID', $id);
	}
}