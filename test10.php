<?php

function isContinuousSequence($arr) {

    if (empty($arr))
    {
        return false;
    }

    $item = $arr[0];

    for ($i = 1; $i < count($arr); $i++)
    {
        if ($arr[$i] !== ++$item) return false;
    }

    return true;
}

var_dump(isContinuousSequence([10, 11, 12, 13]));
echo '<br>';
var_dump(isContinuousSequence([10, 11, 12, 14, 15]));
echo '<br>';
var_dump(isContinuousSequence([]));
echo '<br>';
var_dump(isContinuousSequence([10, 11, 13]));



//isContinuousSequence([10, 11, 12, 13]);     // => true
//isContinuousSequence([10, 11, 12, 14, 15]); // => false
//isContinuousSequence([1, 2, 2, 3]);         // => false
//isContinuousSequence([]);                   // => false