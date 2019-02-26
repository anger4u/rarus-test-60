<?php

function isPalindrome($word)
{
    $wordLen = strlen($word);

    if ($wordLen === 0) {
        echo 'false';
        return false;
    }

    $mid = ceil($wordLen / 2) - ($wordLen % 2 > 0 ? 1 : 0);

    for ( $i = 0; $i < $mid; $i++ )
    {
        $currLet = $word[$i];
        $compInd = $wordLen - ($i + 1);
        $compLet = $word[$compInd];

        if ( $currLet !== $compLet) {
            echo 'false';
            return false;
        }
    }

    echo 'true';
    return true;
}

isPalindrome('salas');


//другой вариант решения через mb_substr()
//function isPalindrome($word)
////{
////    $wordLen = strlen($word);
////
////    if ($wordLen === 0) {
////        echo 'false';
////        return false;
////    }
////
////    $mid = ceil($wordLen / 2) - (($wordLen % 2) > 0 ? 1 : 0);
////
////    for ( $i = 0; $i < $mid; $i++ )
////    {
////        if ( mb_substr($word, $i, 1) !== mb_substr($word, $wordLen-$i-1, 1))
////        {
////            echo 'false';
////            return false;
////        }
////    }
////
////    echo 'true';
////    return true;
////}