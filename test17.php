<?php

function countUniqChars($str) {

    if(empty($str)) {
        $counter = 0;
    } else {
        $temp = [];

        for ($i = 0; $i < strlen($str); $i++) {
            if (!in_array($str[$i], $temp)) {
                $temp[] = $str[$i];
                $counter++;
            }
        }
    }

    echo $counter;
    return $counter;
}

$text1 = 'yyab';
countUniqChars($text1); // => 3
echo '<br>';

$text2 = 'You know nothing Jon Snow';
countUniqChars($text2); // => 13
echo '<br>';

$text3 = '';
countUniqChars($text3); // => 0