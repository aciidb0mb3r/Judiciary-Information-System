<?php

class AddaccountController extends BaseController {

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
		return View::make('pages.account');
	}

	public function store()
	{
		if(Input::get('judge') == 'Add Judge')
		{
			$user = new User;
			$user->fullname = Input::get('fullname');
			$user->password = Hash::make(Input::get('password'));
			$user->type = 'judge';
			$user->save();
		}
		else
		{
			$user = new User;
			$user->fullname = Input::get('fullname');
			$user->password = Hash::make(Input::get('password'));
			$user->type = 'lawyer';
			$user->balance = 100.0;
			$user->save();
		}
		return Redirect::to('addaccount');
	}
}
