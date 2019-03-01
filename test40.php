<?php

function without() {

    $args = func_get_args();
    $arr = array_shift($args);

    for ($i = 0; $i < count($arr); $i++) {
        for ($y = 0; $y < count($args); $y++) {
            if ($arr[$i] === $args[$y]) {
                unset($arr[$i]);
            }
        }

    }

    return $arr;
}

print_r(without([3, 4, 10, 4, 'true'], 4)); // => [3, 10, 'true']
echo '<br>';

print_r(without(['3', 2], 0, 5, 11)); // => ['3', 2]