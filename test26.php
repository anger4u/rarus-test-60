<?php
//создаем словарь (пустой массив)
function make(){
    return [];
}

function set(&$map, $key, $value){

    //вычислили хеш (реальный ключ) 1 раз ибо обращаемся к нему много раз и каждый раз считать не надо
    $key = getHash($key);

    //если такой элемент уже есть
    if (!empty($map[$key]))
        //если он занят вернем false
        if (ismute($map, $key))
            return false;
        //иначе просто запишем его
        else {
            $map[$key] = ['value' => $value, 'mute' => 0];
            return true;
        }
    //если нет то создадим
    else {
        $map[$key] = ['value' => $value, 'mute' => 0];
        return true;
    }
}

function get (&$map, $key, $default = null){

    $key = getHash($key);
    if (!empty($map[$key]))
        return $map[$key]['value'];
    elseif (!is_null($default))
        return $default;
    else
    {
        return NULL;
    }
}
//вычисляем хеш на основе ключа
function getHash($key){
    return crc32($key) % 1000;
}

//проверяем не занят ли элемент
function ismute(&$map, $key){
    if ($map[$key]['mute'] == 1)
        return true;
    else
        return false;
}

$map = make();
pre("---");
var_dump(get($map, 'key'));
pre(get($map, 'key', 'value'));
set($map, 'key2', 'value2');
pre(get($map, 'key2'));