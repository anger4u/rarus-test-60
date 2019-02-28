<?php

function genDiff($arr1, $arr2) {

    $result = [];

    foreach ($arr1 as $key1 => $value1) {
        if (!array_key_exists($key1, $arr2)) {
            $result[$key1] = 'deleted';
        }
        foreach ($arr2 as $key2 => $value2) {
            if ($key1 === $key2) {
                if ($value1 === $value2) {
                    $result[$key1] = 'unchanged';
                } else {
                    $result[$key1] = 'changed';
                }
            } else {
                if (!array_key_exists($key2, $arr1)) {
                    $result[$key2] = 'added';
                }
            }
        }

    }
    return $result;
}

$result = genDiff(
    ['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true]
);

print_r($result);

// => [
//     'one' => 'deleted',
//     'two' => 'changed'
//     'zero' => 'added',
//     'four' => 'unchanged',
// ];