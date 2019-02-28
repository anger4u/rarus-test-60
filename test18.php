<?php
function bubbleSort(&$arr)
{
    if (empty($arr)) {
        $result = [];
    } else {
        $arrLen = count($arr);

        for ($i = 0; $i < $arrLen; $i++)
        {
            for ($y = ($i + 1); $y < $arrLen; $y++)
            {
                if ($arr[$i] > $arr[$y])
                {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$y];
                    $arr[$y] = $temp;
                }
            }
        }
        $result = $arr;
    }
    return $result;
}

$array = [];
bubbleSort($array); // => []
print_r($array);
echo '<br>';

$array1 = [3, 10, 4, 3];
bubbleSort($array1); // => [3, 3, 4, 10]
print_r($array1);