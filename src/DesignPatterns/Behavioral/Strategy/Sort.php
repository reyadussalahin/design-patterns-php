<?php

namespace DesignPatterns\Behavioral\Strategy;


interface Sort {
	/**
	 * Provide method to sort array inplace
	 *
	 * @param array &$arr
	 *
	 * @return void
	 */

	public function apply(&$arr): void;
}