<?php

$host = 'localhost'; // имя хоста (уточняется у провайдера)
$database = 'RARUS_TESTS'; // имя базы данных, которую вы должны создать
$user = 'root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd = ''; // заданный вами пароль

$dbh = mysqli_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL. ");
mysqli_select_db($dbh, $database) or die("Не могу подключиться к базе. ");

function createTable($dbh, $table, $fields)
{
    $field = '';
    foreach ($fields as $aritem) {
        $field .= $aritem[0] . ' ' . $aritem[1] . ', ';
    }

    $field = substr(trim($field), 0, -1);
    $query = "CREATE TABLE " . $table . " (" . $field . ")";

    mysqli_query($dbh, $query);
}

$fields = [
    ['name', 'varchar (255)'],
    ['body', 'text'],
    ['created_at', 'timestamp'],
];
$fields1 = [
    ['first_name', 'varchar (255)'],
    ['email', 'varchar (255)'],
    ['manager', 'boolean'],
];
$fields2 = [
    ['user_id', 'integer'],
    ['course_id', 'integer'],
    ['created_at', 'timestamp'],
];

createTable($dbh, 'courses', $fields);
createTable($dbh, 'users ', $fields1);
createTable($dbh, 'course_members', $fields2);