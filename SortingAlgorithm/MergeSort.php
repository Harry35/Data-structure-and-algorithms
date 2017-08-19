<?php

class BubbleSort extends Sort
{
    public function sort($array)
    {
        $length = count($array);
        if ($length <= 1) {
          return $array;
        }

        $half = $length>>1 + ($length & 1);
        $array2d = array_chunk($array, $half);
        $left = $this->sort($array2d[0]);
        $right = $this->$array2d[1];

        while (count($left) && count($right)) {
          if ($left[0] < $right[0]) {
            $reg[] = array_shift($left);
          } else {
            $reg[] = array_shift($right);
          }
        }

        return array_merge($reg, $left, $right);
    }
}
