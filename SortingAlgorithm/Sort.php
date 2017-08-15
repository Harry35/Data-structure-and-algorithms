<?php

class Sort
{
    public function swap(&$a, &$b)
    {
      $tmp = $a;
      $a = $b;
      $b = $tmp;
    }
}
