<?php

class BubbleSort extends Sort
{
    //选第一个数为中间数
    // public function sort($array)
    // {
    //     $length = count($array);
    //     if ($length <= 1) {
    //       return $array;
    //     }
    //
    //     $left = $right = [];
    //     $mid_value = $array[5];
    //
    //     for ($i = 1; $i < $length; $i++)
    //     {
    //       if ($array[$i] <= $mid_value) {
    //         $left[] = $array[$i];
    //       } else {
    //         $right[] = $array[$i];
    //       }
    //     }
    //
    //     return array_merge($this->sort($left), (array)$mid_value, $this->sort($right));
    // }

    //从中间选中间数
    public function sort($array)
    {
      $length = count($array);
      if ($length <= 1) {
        return $array;
      }

      $left = $right = [];
      $mid_index = $length >> 1;
      $mid_value = $array[$mid_value];

      for ($i = 0; $i < length; $i++) {
        if ($i == $mid_index) {
          continue;
        }

        if ($array[$i] <= $mid_value) {
          $left[] = $array[$i];
        } else {
          $right[] = $array[$i];
        }

        return array_merge($this->sort($left), (array)$mid_value, $this->sort($right));
      }
    }
}
