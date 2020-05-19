<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	protected $redirectTo = RouteServiceProvider::HOME;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}

	/**
	 * Show the application's login form.
	 *
	 * @return \Illuminate\View\View
	 */
	public function showLoginForm()
	{
		return view('auth.login');
	}

	/**
	 * The user has been authenticated.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  mixed  $user
	 * @return mixed
	 */
	protected function redirectTo()
	{
		toast(__('Welcome, :name', ['name' => auth()->user()->name]), 'success');

		return $this->redirectTo;
	}

	/**
	 * The user has logged out of the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return mixed
	 */
	protected function loggedOut(Request $request)
	{
		toast(__('You have successfully logged out!'), 'success');
	}

	/**
	 * Redirect the user to the GitHub authentication page.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function redirectToProvider($provider)
	{
		return Socialite::driver($provider)->redirect();
	}

	/**
	 * Obtain the user information from GitHub.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function handleProviderCallback($provider)
	{
		$socialiteUser = Socialite::driver($provider)->user();

		$user = User::whereEmail($socialiteUser->getEmail())->first();

		if (!$user)
			$user = User::updateOrCreate([
				'name' => $socialiteUser->getName(),
				'email' => $socialiteUser->getEmail(),
				'provider_id' => $socialiteUser->getId(),
				'provider' => $provider
			]);

		Auth::login($user, true);

		toast(__('Welcome, :name', ['name' => $user->name]), 'success');
		return redirect($this->redirectTo);
	}
}
