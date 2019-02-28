<?php

function buildDefinitionList ($arr) {

    $dl = '<dl>';

    foreach($arr as $item) {
        if(!empty($item)) {
            $dl .= '<dt>' . $item[0] . '</dt>';
            $dl .= '<dd>' . $item[1] . '</dd>';
        }
    }

    $dl .= '</dl>';

    return $dl;
}

$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
    [],
];

print_r(buildDefinitionList($definitions));