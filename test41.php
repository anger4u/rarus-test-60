<?php

function getDifference($arr1, $arr2) {

    $result = [];

    foreach ($arr1 as $item1) {
        if (!in_array($item1, $arr2)) {
            $result[] = $item1;
        }
    }

    return $result;
}

print_r(getDifference([2, 1], [2, 3]));
// → [1]