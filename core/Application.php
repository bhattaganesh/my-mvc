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
	 * Root Directory Path.
	 *
	 * @since 1.0.0
	 * @var String
	 */
	public static String $ROOT_DIR;

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
	 * Request.
	 *
	 * @since 1.0.0
	 * @var Response
	 */
	public Response $response;

	/**
	 * Application.
	 *
	 * @since 1.0.0
	 * @var Application
	 */
	public static Application $app;

	/**
	 * Contructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct($rootPath)
	{
		self::$ROOT_DIR  = $rootPath;
		self::$app 		 = $this;
		$this->request   = new Request();
		$this->response  = new Response();
		$this->router    = new Router($this->request, $this->response);
	}

	/**
	 * Runs the applicaitons.
	 *
	 * @since 1.0.0
	 */
	public function run()
	{
		echo $this->router->resolve();
	}
}
