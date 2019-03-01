<?php

function union()
{
    $result = [];
    $temp = func_get_args();

    foreach ($temp as $item) {
        $counter = count($item);
        for ($i =0; $i < $counter; $i++) {
            if (!in_array($item[$i], $result, true)) {
                $result[] = $item[$i];
            }
        }
    }

    return $result;
}

union([3]); // => [3]
print_r(union([3]));
echo'<br>';

union([3, 2], [2, 2, 1]); // => [3, 2, 1]
print_r(union([3, 2], [2, 2, 1]));
echo'<br>';

union(['a', 3, false], [true, false, 3], [false, 5, 8]); // => ['a', 3, false, true, 5, 8]
var_dump(union(['a', 3, false], [true, false, 3], [false, 5, 8]));
echo'<br>';