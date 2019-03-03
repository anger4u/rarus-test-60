<?php

$host = 'localhost'; // имя хоста (уточняется у провайдера)
$database = 'RARUS_TESTS'; // имя базы данных, которую вы должны создать
$user = 'root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd = ''; // заданный вами пароль

$dbh = mysqli_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL. ");
mysqli_select_db($dbh, $database) or die("Не могу подключиться к базе. ");

function createTable($dbh, $tName, $fields)
{
    $query1 = "ALTER TABLE users ADD PRIMARY KEY (first_name)";

    $field = '';
    foreach ($fields as $aritem) {
        $field .= $aritem . ' varchar(255), ';
    }

    $query2 = "CREATE TABLE " . $tName . " (" . $field . "FOREIGN KEY (" . $fields[0] . ") REFERENCES users (first_name))";

    mysqli_query($dbh, $query1);
    mysqli_query($dbh, $query2);
}

function addRow($dbh, $table, $list)
{
    $itemList = '';
    foreach ($list as $item) {
        $itemList .= "('" . $item[0] . "', '" . $item[1] . "', '" . $item[2] . "'), ";
    }
    $itemList = substr(trim($itemList), 0, -1);

    $query = "INSERT INTO " . $table . " VALUES " . $itemList;

    mysqli_query($dbh, $query);
}


$users = [
    ['Alex', 'Jones', '1999-03-01'],
    ['Bob', 'Smith', '2000-03-01']
];

$cars = [
    ['Alex', 'Kia', 'Ceed'],
    ['Alex', 'BMW', 'X5'],
    ['Alex', 'Lada', 'Granta'],
    ['Bob', 'Opel', 'Vectra'],
    ['Bob', 'Mazda', '3']
];

createTable($dbh, 'cars', ['user_first_name', 'brand', 'model']);
addRow($dbh, 'users', $users);
addRow($dbh, 'cars', $cars);