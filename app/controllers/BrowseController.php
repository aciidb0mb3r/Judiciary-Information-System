<?php

class BrowseController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function servePage()
	{
		if(Input::get("search"))
		{
			$cases = CaseModel::where('casename', 'LIKE', '%' . Input::get("search").'%')->get();
		}
		else
		{
			$cases = CaseModel::all();
		}
		return View::make('pages.browse',array("cases" => $cases));
	}

}
