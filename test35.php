<?php

function getChildren($arr) {

    $result = [];

    foreach ($arr as $arrItem) {
        foreach ($arrItem['children'] as $arrItemVal) {
            $result[] = $arrItemVal;
        }

    }

    return $result;
}


$users = [
    [
        'name' => 'Tirion',
        'children' => [
            ['name' => 'Mira', 'birdhday' => '1983-03-23']
        ]
    ],
    ['name' => 'Bronn', 'children' => []],
    [
        'name' => 'Sam',
        'children' => [
            ['name' => 'Aria', 'birdhday' => '2012-11-03'],
            ['name' => 'Keit', 'birdhday' => '1933-05-14']
        ]
    ],
    [
        'name' => 'Rob',
        'children' => [
            ['name' => 'Tisha', 'birdhday' => '2012-11-03']
        ]
    ],
];


print_r(getChildren($users));


// [
//     ['name' => 'Mira', 'birdhday' => '1983-03-23'],
//     ['name' => 'Aria', 'birdhday' => '2012-11-03'],
//     ['name' => 'Keit', 'birdhday' => '1933-05-14'],
//     ['name' => 'Tisha', 'birdhday' => '2012-11-03']
// ]