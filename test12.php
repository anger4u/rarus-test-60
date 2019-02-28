<?php

function getSameParity($arr)
{
    if(empty($arr))
    {
        return [];
    }

    $result = [];

    $typeOne = $arr[0] % 2;

    foreach($arr as $item)
    {
        if($item % 2 == $typeOne)
        {
            $result[] = $item;
        }
    }

    return $result;
}

print_r(getSameParity([]));        // => []
echo '<br>';
print_r(getSameParity([1, 2, 3])); // => [1, 3]
echo '<br>';
print_r(getSameParity([1, 2, 8])); // => [1]
echo '<br>';
print_r(getSameParity([2, 2, 8])); // => [2, 2, 8]
