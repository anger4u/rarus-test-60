<?php

function reverse(int $num)
{
    $numMinus = false;

    if ($num < 0)
    {
        $numMinus = true;
        $num *= -1;
    }

    $str = (string) $num;
    $num = (int) strrev($str);

    if($numMinus)
    {
        $num *= -1;
    }

    echo $num;

}

reverse(-123123);

