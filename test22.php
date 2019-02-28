<?php

function getIn($data, $keys)
{
    $result = $data;

    foreach ($keys as $key) {
        if (!empty($result[$key])) {
            $result = $result[$key];
        }
        else {
            return null;
        }
    }

    return $result;
}

$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2'],
    ],
];


getIn($data, ['undefined']);        // => null
var_dump(getIn($data, ['undefined']));
echo '<br>';

getIn($data, ['user']);             // => 'ubuntu'
var_dump(getIn($data, ['user']));
echo '<br>';

getIn($data, ['user', 'ubuntu']);   // => null
var_dump(getIn($data, ['user', 'ubuntu']));
echo '<br>';

getIn($data, ['hosts', 1, 'name']); // => 'web2'
var_dump(getIn($data, ['hosts', 1, 'name']));
echo '<br>';

getIn($data, ['hosts', 0]);         // => ['name' => 'web1']
var_dump(getIn($data, ['hosts', 0]));