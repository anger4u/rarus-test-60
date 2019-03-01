<?php

$last = function($str)
{
    if (empty($str)) {
        return null;
    } else {
        return substr($str, -1);
    }
};

$last(''); // => null
var_dump($last(''));
echo '<br>';

$last('pow'); // => w
var_dump($last('pow'));
echo '<br>';

$last('kids'); // => s
var_dump($last('kids'));