<?php

$host = 'localhost'; // имя хоста (уточняется у провайдера)
$database = 'RARUS_TESTS'; // имя базы данных, которую вы должны создать
$user = 'root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd = ''; // заданный вами пароль

$dbh = mysqli_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL. ");
mysqli_select_db($dbh, $database) or die("Не могу подключиться к базе. ");

function deleteSansa($dbh, $name)
{
    $query = "DELETE FROM users WHERE first_name = '" . mysqli_real_escape_string($dbh, $name) . "'";
    mysqli_query($dbh, $query);
}

function insertArya($dbh, $name, $email)
{
    $query = "INSERT INTO users (first_name, email) VALUES ('" . mysqli_real_escape_string($dbh,
            $name) . "', '" . mysqli_real_escape_string($dbh, $email) . "')";
    mysqli_query($dbh, $query);
}

function updateTirion($dbh, $flag, $email)
{
    $query = "UPDATE users SET manager = " . (bool)$flag . " WHERE email ='" . mysqli_real_escape_string($dbh,
            $email) . "'";
    mysqli_query($dbh, $query);
}

deleteSansa($dbh, "Sansa");
insertArya($dbh, "Arya", "arya@winter.com");
updateTirion($dbh, true, "tirion@got.com");
