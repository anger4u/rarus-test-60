<?php

// Это как доп решение через php функцию <========================================

$host = 'localhost'; // имя хоста (уточняется у провайдера)
$database = 'RARUS_TESTS'; // имя базы данных, которую вы должны создать
$user = 'root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd = ''; // заданный вами пароль

$dbh = mysqli_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL. ");
mysqli_select_db($dbh, $database) or die("Не могу подключиться к базе. ");

function selectAll($dbh, $tName)
{
    $query = "SELECT * FROM " . $tName . " WHERE birthday < '2002-10-03' ORDER BY first_name LIMIT 2, 3";

    print_r($query);
    echo '<br>';

    mysqli_query($dbh, $query);
}

selectAll($dbh, 'users');