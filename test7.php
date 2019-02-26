<?php

function addPrefix($arr, $prefix) {
    $result = [];

    foreach ($arr as $item)
    {
        if(is_string($item)) {
            $result[] = $prefix . ' ' . $item;
        } else {
            $result[] = 'введите строку ';
        }
    }

    return $result;
}

$names = [1, 'logan', 3];
print_r(addPrefix($names, 'Mr'));

