<?php

function calculateAverage($arr)
{
    if (empty($arr)) {
        print_r('массив пуст ');
        return null;
    }

    $count = count($arr);
    $sum = 0;

    foreach ($arr as $item) {
        $sum += $item;
    }

    $sum /= $count;

    return $sum;
}

$items = [1, 2, 3, 4, 5, 6];

var_dump(calculateAverage($items));
