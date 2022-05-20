<?php

namespace app\core;

use app\core\Application;

/**
 * Base Controller Class.
 *
 * @since 1.0.0
 */
class Controller
{

	/**
	 * Render View.
	 *
	 * @since 1.0.0
	 *
	 * @param  String $view View file name.
	 * @param  Array $params Parameters.
	 */
	public function render($view, $params = [])
	{
		return Application::$app->router->renderView($view, $params);
	}
}
