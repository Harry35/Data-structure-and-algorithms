<?php

class SortTestHelper extends Sort {
    public function generateRandomArray(int $n, int $rangeL, int $rangeR)
    {
        if ($rangeL >= $rangeR) {
          return false;
        }
        $array = [];
        for ($i = 0; $i < $n; $i++) {
          $array[$i] = rand() % ($rangeR - $rangeL + 1) + $rangeL;
          // $array[$i] = rand($rangeL, $rangeR);
        }

        return $array
    }

    public function generateNearlyOrderedArray(int $n, int $swapTimes)
    {
        $array = [];
        for ($i = 0; $i < $n; $i++) {
            $array[$i] = $i;
        }

        for (int $i = 0; $i < $swapTimes; $i++) {
            $posX = rand()%$n;
            $posY = rand()%$n;
            $this->swap($array[$posX], $array[$posY]);
        }
    }
}
