<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\VerifyMail;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller {
	public function __construct() {

		$this->middleware('guest');

	}

	public function create() {
		return view('register.create');
	}

	public function verifyUser($id) {

		$user = User::find($id);
		$user->is_verified = 1;
		$user->save();

		session()->flash('message', 'Uspešno ste se verifikovali.');
		return redirect('/login');
	}

	public function store() {

		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required | min:6'
		]);

		$user = new User();
		$user->name = request('name');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->is_verified = 0;
		$user->save();

		Mail::to($user->email)->send(new VerifyMail($user));
		session()->flash('message', 'Uspešno ste se registrovali. Na email smo vam poslali verifikacioni link. Tek posle verifikacije moći ćete se ulogovati.');

		return redirect('/login');
	}
}
