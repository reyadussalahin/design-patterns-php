<?php

namespace DesignPatterns\Behavioral\Strategy;



use DesignPatterns\Behavioral\Strategy\Sort;


class SortContext {
	private $sort;

	/**
	 * Constructor of \DesignPatterns\Behavioral\Strategy\Php\SortContext;
	 *
	 * @param \DesignPatterns\Behavioral\Strategy\Php\Sort $sort
	 *
	 * @return void
	 */

	public function __construct(Sort $sort) {
		$this->sort = $sort;
	}

	/**
	 * Calls $this->sort->apply() method to sort array in place 
	 *
	 * @param array &$arr
	 *
	 * @return void
	 */

	public function run(&$arr): void {
		$this->sort->apply($arr);
	}
}