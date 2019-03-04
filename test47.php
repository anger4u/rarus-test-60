<?php

// Это как доп решение через php функцию <========================================

$host = 'localhost'; // имя хоста (уточняется у провайдера)
$database = 'RARUS_TESTS'; // имя базы данных, которую вы должны создать
$user = 'root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd = ''; // заданный вами пароль

$dbh = mysqli_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL. ");
mysqli_select_db($dbh, $database) or die("Не могу подключиться к базе. ");

function createTable($dbh, $tName, $fields)
{
    $fields0 = $fields[0] . ' int(10) AUTO_INCREMENT, ';
    $fields1 = $fields[1] . ' varchar(255) NOT NULL UNIQUE, ';
    $fields2 = $fields[2] . ' varchar(255) NOT NULL, ';
    $fields3 = $fields[3] . ' timestamp NOT NULL, ';

    $field = $fields0  . $fields1 . $fields2 . $fields3;

    $query = "CREATE TABLE " . $tName . " (" . $field . "PRIMARY KEY (" . $fields[0] . "))";

    print_r($query);
    echo '<br>';

    mysqli_query($dbh, $query);
}

function createTable2($dbh, $tName, $fields)
{
    $fields0 = $fields[0] . ' int(10) AUTO_INCREMENT, ';
    $fields1 = $fields[1] . ' varchar(255), ';
    $fields2 = $fields[2] . ' varchar(255) NOT NULL, ';
    $fields3 = $fields[3] . ' timestamp NOT NULL, ';

    $field = $fields0  . $fields1 . $fields2 . $fields3;

    $query = "CREATE TABLE " . $tName . " (" . $field . "PRIMARY KEY (" . $fields[0] . "), FOREIGN KEY (" . $fields[1] . ") REFERENCES users (username))";

    print_r($query);
    echo '<br>';

    mysqli_query($dbh, $query);
}

createTable($dbh, 'users', ['id', 'username', 'email', 'created_at']);
createTable2($dbh, 'topics', ['id', 'user_id', 'body', 'created_at']);