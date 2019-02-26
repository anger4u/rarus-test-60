<?php

function get ($arr, $i, $default = null)
{
    if(array_key_exists($i, $arr))
    {
        return $arr[$i];
    } elseif (!empty($default)){
        return $default;
    } else {
        return null;
    }
}

$cities = ['moscow', 'london', 'berlin', 'porto'];

var_dump(get($cities, 1));
var_dump(get($cities, 4));
var_dump(get($cities, 10, 'paris'));

