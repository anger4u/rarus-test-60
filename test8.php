<?php

function swap($arr, $index)
{
    $count = count($arr);

    if ($index >= $count -1 || $index == 0) {
        return $arr;
    } else {
        $temp = $arr[$index-1];
        $arr[$index-1] = $arr[$index+1];
        $arr[$index+1] = $temp;
        return $arr;
    }
}

$names = ['john', 'smith', 'karl', 'john', 'smith', 'karl'];

print_r(swap($names, 0));
echo '<br>';
print_r(swap($names, 1));
echo '<br>';
print_r(swap($names, 2));
echo '<br>';
print_r(swap($names, 8));

//$names = ['john', 'smith', 'karl'];
//
//$result = swap($names, 1);
//print_r($result); // => ['karl', 'smith', 'john']
//
//$result = swap($names, 2);
//print_r($result); // => ['john', 'smith', 'karl']
