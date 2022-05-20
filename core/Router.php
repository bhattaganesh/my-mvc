<?php

namespace app\core;

/**
 * Router Class.
 *
 * @since 1.0.0
 */
class Router
{

	/**
	 * Request.
	 *
	 * @since 1.0.0
	 * @var Request
	 */
	public Request $request;

	/**
	 * Response.
	 *
	 * @since 1.0.0
	 * @var Response
	 */
	public Response $response;


	protected array $routes = [];


	/**
	 * Router Constructor.
	 *
	 * @since 1.0.0
	 *
	 * @param  Request  $request Request.
	 * @param  Response $response Response.
	 */
	public function __construct(Request $request, Response $response)
	{
		$this->request = $request;
		$this->response = $response;
	}

	/**
	 * GET Method.
	 *
	 * @since 1.0.0
	 *
	 * @param  String $path Path.
	 * @param  callback $callback Callback.
	 */
	public function get($path, $callback)
	{
		$this->routes['get'][$path] = $callback;
	}

	/**
	 * POST Method.
	 *
	 * @since 1.0.0
	 *
	 * @param  String $path Path.
	 * @param  callback $callback Callback.
	 */
	public function post($path, $callback)
	{
		$this->routes['post'][$path] = $callback;
	}

	/**
	 * Determine the routes.
	 *
	 * @since 1.0.0
	 */
	public function resolve()
	{
		$path = $this->request->path();
		$method = $this->request->method();

		$callback = $this->routes[$method][$path] ?? false;

		if (false === $callback) {
			$this->response->setStatusCode(404);
			return $this->renderView('_404');
		}

		if (is_string($callback)) {
			return $this->renderView($callback);
		}

		if (is_array($callback)) {
			$callback[0] = new $callback[0]();
		}

		return call_user_func($callback, $this->request);
	}

	/**
	 * Render View File.
	 *
	 * @since 1.0.0
	 *
	 * @param  String $view View File.
	 */
	public function renderView($view, $params = [])
	{
		$layoutContent = $this->layoutContent();
		$viewContent   = $this->viewContent($view, $params);

		return str_replace('{{ content }}', $viewContent, $layoutContent);
	}

	/**
	 * Get Layout Content.
	 *
	 * @since 1.0.0
	 */
	private function layoutContent()
	{
		ob_start();
		include_once Application::$ROOT_DIR . '/views/layouts/base.php';
		return ob_get_clean();
	}

	/**
	 * Get View File Content.
	 *
	 * @since 1.0.0
	 *
	 * @param  String $view View File.
	 */
	private function viewContent($view, $params)
	{
		if (!empty($params)) {
			foreach ($params as $key => $value) {
				$$key = $value;
			}
		}

		ob_start();
		include_once Application::$ROOT_DIR . "/views/$view.php";
		return ob_get_clean();
	}
}
