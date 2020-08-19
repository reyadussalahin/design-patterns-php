<?php

use PHPUnit\Framework\TestCase;

use DesignPatterns\Behavioral\Strategy\Php\InsertionSort;
use DesignPatterns\Behavioral\Strategy\Php\SelectionSort;
use DesignPatterns\Behavioral\Strategy\Php\SortContext;


class StrategyTest extends TestCase {
	private function compareArray($a, $b): int {
		$la = count($a);
		$lb = count($b);
		$mn = min($la, $lb);
		for($i = 0; $i < $mn; $i++) {
			if($a[$i] === $b[$i]) {
				continue;
			}
			if($a[$i] > $b[$i]) {
				return 1;
			}
			if($a[$i] < $b[$i]) {
				return -1;
			}
		}
		if($la > $lb) {
			return 1;
		}
		if($la < $lb) {
			return -1;
		}
		return 0;
	}

	public function testInsertionSort() {
		$context = new SortContext(new InsertionSort());

		$arr = [1, 2, 3, 4, 3, 2, 1];
		$result = [1, 1, 2, 2, 3, 3, 4];

		$context->run($arr); // sorting $arr in place

		$this->assertEquals(0, $this->compareArray($arr, $result));
	}

	public function testSelectionSort() {
		$context = new SortContext(new SelectionSort());

		$arr = [1, 2, 3, 4, 3, 2, 1];
		$result = [1, 1, 2, 2, 3, 3, 4];

		$context->run($arr); // sorting $arr in place

		$this->assertEquals(0, $this->compareArray($arr, $result));
	}
}
