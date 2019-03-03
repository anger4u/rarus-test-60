<?php

$host = 'localhost'; // имя хоста (уточняется у провайдера)
$database = 'RARUS_TESTS'; // имя базы данных, которую вы должны создать
$user = 'root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd = ''; // заданный вами пароль

$dbh = mysqli_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL. ");
mysqli_select_db($dbh, $database) or die("Не могу подключиться к базе. ");

function createTable($dbh, $tName, $fields)
{
    $field = $fields[0] . ' int(10) AUTO_INCREMENT, ' . $fields[1] . ' varchar(255), ';

    $query = "CREATE TABLE " . $tName . " (" . $field . "PRIMARY KEY (" . $fields[0] . "))";

    mysqli_query($dbh, $query);
}

function addRow($dbh, $table, $list)
{
    $itemList = '';
    foreach ($list as $item) {
        $itemList .= "('NULL', '" . $item . "'), ";
    }
    $itemList = substr(trim($itemList), 0, -1);

    $query = "INSERT INTO " . $table . " VALUES " . $itemList;

    mysqli_query($dbh, $query);
}

createTable($dbh, 'article_categories', ['id', 'name']);
addRow($dbh, 'article_categories', ['text 1', 'text 2']);