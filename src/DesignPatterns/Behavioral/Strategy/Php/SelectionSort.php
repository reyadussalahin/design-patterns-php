<?php

namespace DesignPatterns\Behavioral\Strategy\Php;


class SelectionSort implements Sort {
	/**
	 * Provide method to sort array inplace
	 *
	 * @param array &$arr
	 *
	 * @return void
	 */

	public function apply(&$arr): void {
		$len = count($arr);
		if($len <= 1) {
			return;
		}
		for($i = 0; $i < $len; $i++) {
			$x = $i;
			for($j = $i+1; $j < $len; $j++) {
				if($arr[$j] < $arr[$x]) {
					$x = $j;
				}
			}
			$t = $arr[$i];
			$arr[$i] = $arr[$x];
			$arr[$x] = $t;
		}
	}
}