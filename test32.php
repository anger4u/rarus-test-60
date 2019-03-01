<?php

function slugify($str) {

    $strSep = array_filter(explode(' ', $str));

    $slug = strtolower(implode('-', $strSep));

    return $slug;
}

slugify(''); // ''
var_dump(slugify(''));
echo '<br>';

slugify('test'); // 'test'
var_dump(slugify('test'));
echo '<br>';

slugify('test me'); // 'test-me'
var_dump(slugify('test me'));
echo '<br>';

slugify('La La la LA'); // 'la-la-la-la'
var_dump(slugify('La La la LA'));
echo '<br>';

slugify('O la      lu'); // 'o-la-lu'
var_dump(slugify('O la      lu'));
echo '<br>';

slugify(' yOu   '); // 'you'
var_dump(slugify(' yOu   '));
echo '<br>';