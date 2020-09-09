<?php

namespace DesignPatterns\Behavioral\Strategy;


class InsertionSort implements Sort {
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
        for($i = 1; $i < $len; $i++) {
            $key = $arr[$i];
            for($j = $i - 1; $j >= 0 && $arr[$j] > $key; $j--) {
                $arr[$j+1] = $arr[$j];
            }
            $arr[$j + 1] = $key;
        }
    }
}