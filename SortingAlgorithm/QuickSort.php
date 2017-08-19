<?php

class BubbleSort extends Sort
{
    public function sort($array)
    {
        $length = count($array);
        if ($length <= 1) {
          return $array;
        }

        $left = $right = [];
        $mid_value = $array[5];

        for ($i = 1; $i < $length; $i++)
        {
          if ($array[$i] <= $mid_value) {
            $left[] = $array[$i];
          } else {
            $right[] = $array[$i];
          }
        }

        return array_merge($this->sort($left), (array)$mid_value, $this->sort($right));
    }
}
