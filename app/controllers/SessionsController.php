<?php

use Acme\forms\LoginForm;
use Laracasts\Validation\FormValidationException;

class SessionsController extends \BaseController {

    protected $loginForm;

    public function __construct(LoginForm $loginForm){
        $this->loginForm = $loginForm;
    }

	public function create()
	{
		// Verificamos que el usuario no esté autenticado
		if (Auth::check())
			return Redirect::route('home');

		return View::make('auth.create');
	}

	public function store()
	{
		$remember = (Input::has('remember')) ? true : false;

		$formData = Input::only('email', 'password');

		$this->loginForm->validate($formData);

		if ( ! Auth::attempt($formData, $remember))
			return Redirect::back()->withInput()->with('error', 'Su nombre de Usuario o Su clave son Incorrectos.');

        return Redirect::route('home');
	}
	public function destroy(){
		Auth::logout();
        Session::clear();
		return Redirect::to('/login')->with('info', 'Gracias por su Visita.');
	}

}