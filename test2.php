<?php


function isPalindrome($word)
{
    if (strlen($word) == 0)
    {
        echo 'false';
        return false;
    }

    $revWord = strrev($word);

    if ($word !== $revWord)
    {
        echo 'false';
        return false;
    }

    echo 'true';
    return true;
}

isPalindrome('salas');
