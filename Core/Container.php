<?php

namespace Core;

class Container
{
	protected $bindings = [];
	public function bind($key, $funk)
	{
		$this->bindings[$key] = $funk;
	}

	public function resolve($key)
	{
		if (!array_key_exists($key, $this->bindings)) {
			throw new \Exception("non trovo un matching binding per la key {$key} bho non lo so jeffrey non si spiega");
		}

		$resolver = $this->bindings[$key];
		return call_user_func($resolver);
	}
}
