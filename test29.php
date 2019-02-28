<?php

function sayPrimeOrNotBool($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    } return true;
}

function sayPrimeOrNot($num)
{
    return (sayPrimeOrNotBool($num)) ? print_r('yes') : print_r('no');
}


sayPrimeOrNot(5); // => yes
echo '<br>';
sayPrimeOrNot(4); // => no