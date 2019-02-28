<?php

function makeCensored($str, $search) {

    $replace = '$#%!';
    $str = explode(" ", $str);

    foreach ($str as &$val)
    {
        if (is_numeric(array_search($val, $search)))
        {
            $val = str_replace($search, $replace, $val);
        }
    }

    $str = implode(" ", $str);
    print_r($str);
    return $str;
}

$sentence = 'When you play the game of thrones, you win or you die';
makeCensored($sentence, ['die', 'play']);
// => When you $#%! the game of thrones, you win or you $#%!

echo '<br>';

$sentence2 = 'chicken chicken? chicken! chicken';
makeCensored($sentence2, ['?', 'chicken']);
// => '$#%! chicken? chicken! $#%!';

