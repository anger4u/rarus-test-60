<?php

function getIndexOfWarmestDay($arr)
{
    if (empty($arr)) {
        return null;
    }

    $compList = [];

    foreach ($arr as $item) {
        if (is_array($item)) {
            $compList[] = max($item);
        } else {
            $compList[] = $item;
        }
    }

    return max($compList);
}

$data = [
    100,
    [3, 2, 3],
    [-1, -1, 10],
];

getIndexOfWarmestDay($data);

print_r(getIndexOfWarmestDay($data));
