<?php

function wordsCount($fileName) {

    $str = file_get_contents('test-files/' . $fileName);

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

print_r(wordsCount($argv[1]));
