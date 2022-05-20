<?php

namespace app\core;

/**
 * Request Class.
 *
 * @since 1.0.0
 */
class Request
{

	/**
	 * Get Path.
	 *
	 * @since 1.0.0
	 */
	public function path()
	{
		$path = $_SERVER['REQUEST_URI'] ?? '/';
		$pos = strpos($path, '?');

		if (false === $pos) {
			return $path;
		}

		return substr($path, 0, $pos);
	}

	/**
	 * Get Method Name.
	 *
	 * @since 1.0.0
	 */
	public function method()
	{
		return strtolower($_SERVER['REQUEST_METHOD']);
	}

	/**
	 * Check method is GET or not.
	 *
	 * @since 1.0.0
	 *
	 * @return bool
	 */
	public function isGET()
	{
		return 'post' === $this->method();
	}

	/**
	 * Check method is POST or not.
	 *
	 * @since 1.0.0
	 *
	 * @return bool
	 */
	public function isPOST()
	{
		return 'get' === $this->method();
	}

	/**
	 * Get the GET or POST data.
	 *
	 * @since 1.0.0
	 */
	public function data()
	{
		$data = [];

		if ('get' === $this->method()) {
			foreach ($_GET as $key => $value) {
				$data[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
			}
		}

		if ('post' === $this->method()) {
			foreach ($_POST as $key => $value) {
				$data[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
			}
		}


		return $data;
	}
}
