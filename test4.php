<?php

function swap(&$a, &$b)
{
    $a += $b;
    $b = $a - $b;
    $a -= $b;
}

$a = 5;
$b = 8;

swap ($a, $b);

print_r($a);
echo '<br>';
print_r($b);
