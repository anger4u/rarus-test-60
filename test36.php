<?php

function getGirlFriends($arr) {

    $result = [];

    foreach ($arr as $arrItem) {
        foreach ($arrItem['friends'] as $arrItemVal) {
            if (!empty($arrItemVal) && in_array('female', $arrItemVal)) {
                $result[] = $arrItemVal;
            }
        }
    }

    return $result;
}

$users = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
    ['name' => 'Bronn', 'friends' => []],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female']
    ]],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];

print_r(getGirlFriends($users));