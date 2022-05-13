<?php

namespace app\core;

/**
 * Application Class.
 *
 * @since 1.0.0
 */
class Application
{

	/**
	 * Router.
	 *
	 * @since 1.0.0
	 * @var Router
	 */
	public Router $router;

	/**
	 * Request.
	 *
	 * @since 1.0.0
	 * @var Request
	 */
	public Request $request;

	/**
	 * Contructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct()
	{
		$this->request = new Request();
		$this->router  = new Router($this->request);
	}

	public function run()
	{
		$this->router->resolve();
	}
}
