<?php

function getSortedNames($arr) {
    $result = [];

    foreach ($arr as $item) {
        if (is_array($item)) {
            if (array_key_exists('name', $item)) {
                $result[] = $item['name'];
            }
        }
    }

    sort($result);

    return $result;
}

$users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03']
];

getSortedNames($users); // => ['Bronn', 'Eiegon', 'Reigar', 'Sansa']

print_r(getSortedNames($users));