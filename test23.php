<?php

function pick($arr, $keys)
{
    $result = [];
    foreach ($keys as $keyItem)
    {
        if (!empty($arr[$keyItem])) {
            $result[$keyItem] = $arr[$keyItem];
        }
    }
    return $result;
}

$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux'
];

pick($data, ['user']);       // → ['user' => 'ubuntu']
(pick($data, ['user']));
echo '<br>';

pick($data, ['user', 'os']); // → ['user' => 'ubuntu', 'os' => 'linux']
var_dump(pick($data, ['user', 'os']));
echo '<br>';

pick($data, []);             // → []
var_dump(pick($data, []));
echo '<br>';

pick($data, ['none']);       // → []
var_dump(pick($data, ['none']));