<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller {
	public function __construct() {
		$this->middleware('guest', array('except' => 'destroy'));
		$this->middleware('CheckIsVerified', array('except' => ['create', 'destroy']));
	}

	public function destroy() {
		auth()->logout();

		return redirect('/teams');
	}

	public function create() {
		return view('login.create');
	}

	protected function validateLogin(Request $request) {
		$this->validate($request, [
			$this->username() => 'required',
			'password' => 'required',
			// new rules here
		]);
	}

	public function store() {

		if (!auth()->attempt(request(['email', 'password']))) {
			return back()->withErrors([
				'message' => 'Bad credentials. Please try again'
			]);

		}

		return redirect('/teams');
	}
}
