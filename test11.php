<?php

function findIndex($arr, $value)
{

    $key = array_search($value, $arr);

    if ($key)
    {
        return $key;
    } else {
        return -1;
    }
}

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5, 40];
$temperatures2 = [];

var_dump(findIndex($temperatures, 34));
echo '<br>';
var_dump(findIndex($temperatures, 40));
echo '<br>';
var_dump(findIndex($temperatures, 3));

//$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5, 40];
//findIndex($temperatures, 34); // => 1
//findIndex($temperatures, 40); // => 3
//findIndex($temperatures, 3);  // => -1