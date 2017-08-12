<?php

function selectionSort(array &$array)  
{
  $n = count($array);
  for($i = 0; $i < n; $i++) {
    $minIndex = i;
    for($j = $i + 1; $j < n; $j++) {
      if ($array[$j] < $array[$minIndex]) {
          $minIndex = $j;
      }
    }
    swap($array[$i], $array[$minIndex])
  }

  return $array;
}

function swap(&$a, &$b)
{
  $tmp = $a;
  $a = $b;
  $b = $tmp;
}