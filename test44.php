<?php

$host = 'localhost'; // имя хоста (уточняется у провайдера)
$database = 'RARUS_TESTS'; // имя базы данных, которую вы должны создать
$user = 'root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd = ''; // заданный вами пароль

$dbh = mysqli_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL. ");
mysqli_select_db($dbh, $database) or die("Не могу подключиться к базе. ");

function selectUsers($dbh, $date, $field, $count)
{
    $query = "SELECT * FROM users WHERE birthday > '" . $date . "' ORDER BY " . $field . " LIMIT " . $count;
    mysqli_query($dbh, $query);
}

selectUsers($dbh, '1999-10-23', 'first_name', 3);