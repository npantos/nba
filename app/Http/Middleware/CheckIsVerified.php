<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckIsVerified {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {

		$user = User::checkIfVerified($request->email);
		if (!$user->is_verified) {
			return back()->withErrors([
				'message' => 'Korisnik nije verifikovan'
			]);
		}

		return $next($request);
	}
}
