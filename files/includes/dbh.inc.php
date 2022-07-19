<?php

$servername='localhost';
$dbUsername="root";
$pwd='';
$dbName='php_netflix';

$conn = mysqli_connect($servername, $dbUsername, $pwd, $dbName);

if(!$conn)
{
    die("connection failed". mysqli_connect_error());
}