<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\core\Response;

/**
 * SiteController Class.
 *
 * @since 1.0.0
 */
class SiteController extends Controller
{

	/**
	 * List All Contacts.
	 *
	 * @since 1.0.0
	 */
	public function index()
	{
	}

	/**
	 * Show the form.
	 *
	 * @since 1.0.0
	 */
	public function create()
	{
		$params = [
			'name' => 'Ganesh'
		];

		return $this->render('contact', $params);
	}

	/**
	 * Store Contact.
	 *
	 * @since 1.0.0
	 */
	public function store(Request $request)
	{
		// print_r($request->data(), true);
		var_dump($request->data());
		return 'handling contact data';
	}
}
