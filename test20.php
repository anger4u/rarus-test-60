<?php

//штатный способ
function getIntersectionForSortedArray($array1, $array2)
{
    if (empty($array1) || empty($array2)) {
        $result = [];
    } else {
        $result = array_intersect($array1, $array2);
    }
    return $result;
}

getIntersectionForSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]);
// => [10, 24]
print_r(getIntersectionForSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]));
echo '<br>';

getIntersectionForSortedArray([], [10, 13, 14, 18, 24, 30]);
// => [10, 24]
print_r(getIntersectionForSortedArray([], [10, 13, 14, 18, 24, 30]));
echo '<br>';


// перебор элементов
function getIntersectionForSortedArray2($array1, $array2)
{
    if (empty($array1) || empty($array2)) {
        $result = [];
    } else {
        $array3 = [];

        foreach ($array1 as $value) {
            if (in_array($value, $array2)) {
                $array3[] = $value;
            }
        }
        $result = $array3;
    }
    return $result;
}

getIntersectionForSortedArray2([10, 11, 24], [10, 13, 14, 18, 24, 30]);
// => [10, 24]
print_r(getIntersectionForSortedArray2([10, 11, 24], [10, 13, 14, 18, 24, 30]));
echo '<br>';

getIntersectionForSortedArray2([], [10, 13, 14, 18, 24, 30]);
// => [10, 24]
print_r(getIntersectionForSortedArray2([], [10, 13, 14, 18, 24, 30]));