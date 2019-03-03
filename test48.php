<?php

$host = 'localhost'; // имя хоста (уточняется у провайдера)
$database = 'RARUS_TESTS'; // имя базы данных, которую вы должны создать
$user = 'root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd = ''; // заданный вами пароль

$dbh = mysqli_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL. ");
mysqli_select_db($dbh, $database) or die("Не могу подключиться к базе. ");

function changeTable($dbh, $table, $columns)
{
    $query1 = "ALTER TABLE " . $table . " MODIFY (" . $columns[0] . ")";

    $query2 = "ALTER TABLE " . $table . " DROP COLUMN age";

    $query3 = "ALTER TABLE " . $table . " CHANGE name " . $columns[1];

    $query4 = "ALTER TABLE " . $table . " ADD COLUMN " . $columns[2];

    mysqli_query($dbh, $query1);
    mysqli_query($dbh, $query2);
    mysqli_query($dbh, $query3);
    mysqli_query($dbh, $query4);
}

$columns = [
    'email varchar(255) NOT NULL UNIQUE',
    'first_name varchar(255) NOT NULL',
    'created_at timestamp',
];

changeTable($dbh, 'users', $columns);