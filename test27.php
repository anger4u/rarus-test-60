<?php

function wordsCount($str) {
    if (!empty($str)) {
        $str = array_filter(explode(' ', $str));
        foreach ($str as $item) {
            if ($item > 0) {
                $str[] = $item;
            }
        }

        $result = array_count_values($str);
    } else {
        $result = [];
    }

    return $result;
}

wordsCount(''); // []
print_r(wordsCount(''));
echo '<br>';

wordsCount('  one two one'); // ['one' => 2, 'two' => 1]
print_r(wordsCount('  one two one'));
echo '<br>';

wordsCount('  one      two       one     '); // ['one' => 2, 'two' => 1]
print_r(wordsCount('  one      two       one     '));