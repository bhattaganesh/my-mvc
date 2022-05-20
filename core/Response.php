<?php
namespace app\core;

/**
 * Response Class.
 *
 * @since 1.0.0
 */
class Response{

	/**
	 * Set the status code for response.
	 *
	 * @since 1.0.0
	 *
	 * @param  int $code Status Code.
	 */
	public function setStatusCode(int $code) {
		http_response_code($code);
	}
}
