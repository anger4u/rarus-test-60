<?php

function disc($a, $b, $c)
{
    $d = $b * $b - (4 * $a * $c);
    print_r('дискримминант = ' . $d);
    echo '<br>';
    if($d < 0)
    {
        print_r('корней нет, дискримминант = ' . $d);
    }
    elseif ($d == 0)
    {
        $x = (-1 * $b) / (2 * $a);
        print_r('корень один, х = ' . $x);
    }
    else {
        $x1 = ((-1 * $b) + sqrt($d)) / (2 * $a);
        $x2 = ((-1 * $b) - sqrt($d)) / (2 * $a);

        print_r('x1 = ' . $x1 . ' x2 = ' . $x2);
    }
}

$a = 1;
$b = 4;
$c = 4;

echo '<pre>';

print_r($a . 'x^2 + ' . $b . 'x + ' . $c);

echo '<br>';

disc($a, $b , $c);

echo '</pre>';