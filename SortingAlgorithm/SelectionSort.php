<?php
class SelectionSort extends Sort
{
    public function sort(array &$array)
    {
      $n = count($array);
      for ($i = 0; $i < $n; $i++) {
          $minIndex = i;
          //依次找出i的最小值
          for ($j = $i + 1; $j < $n; $j++) {
            if ($array[$j] < $array[$minIndex]) {
                $minIndex = $j;
            }
          }
          $this->swap($array[$i], $array[$minIndex])
      }

      return $array;
    }
}
