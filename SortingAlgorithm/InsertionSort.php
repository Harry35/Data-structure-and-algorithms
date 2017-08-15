<?php

class InsertionSort extends Sort
{
    public function sort(&$array)
    {
        $n = count($array);
        for ($i = 1; $i < n; $i++) {
            for ($j = $i; $j > 0 && $array[$j] < $array[$j-1]; $j--) {
                  //三次赋值
                  $this->swap($array[$j], $array[$j-1]);
            }
        }

        return $array;
    }

    //改进方法
    public function sort(&$array)
    {
        $n = count($array);
        for ($i = 1; $i < n; $i++) {
            $e = $array[$i];
            $j = $i;
            for ($j; $j > 0 && $array[$j-1] < $e; $j--) {
                //一次赋值
                $array[$j] = $array[$j-1];
            }
            $array[$j] = $e
        }
        return $array;
    }
}
