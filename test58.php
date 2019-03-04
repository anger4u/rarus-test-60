<?php

function rrmdir($dir)
{
    $folder = scandir($dir);

    foreach ($folder as $fold) {
        if (!@rmdir($fold)) {
            if (is_dir($fold)) {
                rrmdir($fold);
            }
        } else {
            unset($fold);
        }
    }
}

//Альтернативное решение
function rrmdir($dir)
{
    $includes = glob($dir . '/{,.}*', GLOB_BRACE);
    $systemDots = preg_grep('/\.+$/', $includes);

    foreach ($systemDots as $index => $dot) {

        unset($includes[$index]);
    }

    foreach ($includes as $include) {

        if (is_dir($include) && !is_link($include)) {

            recursiveRemoveDir($include);
        } else {

            unlink($include);
        }
    }

    rmdir($dir);
}