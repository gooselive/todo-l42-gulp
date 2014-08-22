<?php

class AuthController extends Controller {
	public function getLogin() {
		return View::make('login');
	}

	public function postLogin() {
		$rules = array('username' => 'required', 'password' => 'required');
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::route('login')->withErrors($validator);
		}

		$auth = Auth::attempt(array(
			'name' => Input::get('username'),
			'password' => Input::get('password')
			), false);

		if (!$auth) {
			return Redirect::route('login')->withErrors(array(
				'Invalid credentials were provided.'
				));
		}

		return Redirect::route('home');
	}

	public function logout()
	{

		Auth::logout();
		return Redirect::route('login');
	}

	public function getRegister() {
		return View::make('register');
	}

	public function postRegister() {

		$input = Input::all();

		$v = Validator::make($input, User::$rules);

		if($v->passes())
		{
			$user = new User;

			$user->name = Input::get('name');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			return Redirect::to('login');

		}

		return Redirect::to('register')->withErrors($v);
	}

}