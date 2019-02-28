<?php

function average() {

    $nums = func_get_args();
    if(!empty($nums)) {
        $result = array_sum($nums) / count($nums);
    } else {
        return null;
    }

    return $result;
}

average(0); // => 0
print_r(average(0));
echo '<br>';

average(0, 10); // => 5
print_r(average(0, 10));
echo '<br>';

average(-3, 4, 2, 10); // => 3.25
print_r(average(-3, 4, 2, 10));
echo '<br>';

average(); // => null
var_dump(average());