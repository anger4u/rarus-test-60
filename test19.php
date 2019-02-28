<?php

function checkIfBalanced($str) {

    $strLen = strlen($str);

    for ($i = 0; $i < $strLen; $i++) {
        if ($str[$i] === '(' || $str[$i] === ')') {
            $temp++;
        }
    }

    if ($temp % 2 === 0) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

$str1 = '(5 + 6) * (7 + 8)/(4 + 3)';
checkIfBalanced($str1); // => true
var_dump(checkIfBalanced($str1));
echo '<br>';

$str2 = '(4 + 3))';
checkIfBalanced($str2); // => false
var_dump(checkIfBalanced($str2));
echo '<br>';

//другой вариант
function checkIfBalanced2($str2)
{
    $strLen2 = strlen($str2);
    $temp = [];

    for ($i = 0; $i < $strLen2; $i++) {
        $curr = $str2[$i];
        if ($curr === '(') {
            array_push($temp, $curr);
        } elseif ($curr === ')') {
            if (empty($temp)) {
                return false;
            }
            array_pop($temp);
        };
    }

    if (count($temp) === 0) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

$str3 = '(5 + 6) * (7 + 8)/(4 + 3)';
checkIfBalanced($str1); // => true
var_dump(checkIfBalanced2($str1));
echo '<br>';

$str4 = '(4 + 3))';
checkIfBalanced($str2); // => false
var_dump(checkIfBalanced2($str2));