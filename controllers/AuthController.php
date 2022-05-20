<?php

namespace app\controllers;

use app\core\Controller;

/**
 * AuthController Class.
 *
 * @since 1.0.0
 */
class AuthController extends Controller
{
	/**
	 * Register Method.
	 *
	 * @since 1.0.0
	 */
	public function register()
	{
		return $this->render('register');
	}

	/**
	 * Login Method.
	 *
	 * @since 1.0.0
	 */
	public function login()
	{
		return $this->render('login');
	}
}
