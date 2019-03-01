<?php

function getManWithLessFriends($users)
{
    $result = $users[0];

    for ($i = 1; $i < count($users); $i++) {
        if (count($users[$i]['friends']) <= count($result['friends'])) {
            $result = $users[$i];
        }
    }

    return $result;
}

$users = [
    [
        'name' => 'Tirion',
        'friends' => [
            ['name' => 'Mira', 'gender' => 'female'],
            ['name' => 'Ramsey', 'gender' => 'male'],
        ],
    ],
    ['name' => 'Bronn', 'friends' => []],
    [
        'name' => 'Sam',
        'friends' => [
            ['name' => 'Aria', 'gender' => 'female'],
            ['name' => 'Keit', 'gender' => 'female'],
        ],
    ],
    ['name' => 'Keit', 'friends' => []],
    [
        'name' => 'Rob',
        'friends' => [
            ['name' => 'Taywin', 'gender' => 'male'],
        ],
    ],
];

print_r(getManWithLessFriends($users));

// => ['name' => 'Keit', 'friends' => []];