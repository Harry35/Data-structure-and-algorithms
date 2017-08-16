<?php

class BubbleSort extends Sort
{
    public function sort(&$array)
    {
        $n = count($array);
        for ($i = 1; $i < $n; $i++) {
            for ($j = $i; $j+1 < $n; $j++) {
                if ($array[$j] > $array[$j+1]) {
                    $this->swap($array[$j], $array[$j+1]);
                }
            }
        }
        return $array;
    }
}
