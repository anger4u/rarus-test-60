<?php

$word = 'шалаш';

function isPalindrome($word)
{
    $wordLength = strlen($word);
    $midPoint = floor($wordLength / 2);

    for ( $currentLetter = 0; $currentLetter < $wordLength; $currentLetter++ )
    {
        $compareIndex = $wordLength - ($currentLetter + 1);

        if ($currentLetter > $midPoint && $currentLetter !== $currentLetter[$compareIndex]) {
            return false;
            echo 'false';
        }
    }

    return true;
    echo 'true';
}
