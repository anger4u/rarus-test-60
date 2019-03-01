<?php


function takeOldest($arr, $num = 1)
{

    $keys = array_map('strtotime', array_column($arr, 'birthday'));
    $result = array_multisort($keys, SORT_ASC, $arr);

    for ($i = 0; $i < $num; $i++) {
        $resultFin[] = $arr[$i];
    }

    return $resultFin;
}


$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27'],
];

takeOldest($users);
print_r(takeOldest($users));
# => Array (
#   ['name' => 'Rob', 'birthday' => '1975-01-11']
# )