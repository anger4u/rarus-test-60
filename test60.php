<?php

function dump($file, $structure)
{
    $serr_data = serialize($structure);

    file_put_contents($file, $serr_data);
}

function load($file)
{
    $serr_data = file_get_contents($file);

    return unserialize($serr_data);
}
