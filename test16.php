<?php

function getSameCount($arr1, $arr2)
{
    $result = 0;
    foreach (array_unique($arr1) as $item1) {
        foreach (array_unique($arr2) as $item2) {
            if ($item1 === $item2) {
                $result++;
            }
        }
    }

    echo $result;
    return $result;
}

getSameCount([], []); // => 0
echo '<br>';
getSameCount([-1, 10, 3], [10, 100, 35, -1]); // => 2
echo '<br>';
getSameCount([1, 3, 2, 2], [3, 1, 1, 2]); // => 3