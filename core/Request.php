<?php

namespace app\core;

class Request
{

	public function getPath()
	{
		$path = $_SERVER['REQUEST_URI'] ?? '/';
		$pos = strpos($path, '?');

		if (false === $pos) {
			return $path;
		}

		return substr($path, 0, $pos);
	}

	public function getMethod()
	{
		return strtolower($_SERVER['REQUEST_METHOD']);
	}
}
