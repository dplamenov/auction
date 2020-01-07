<?php
session_start();
$iniFile = parse_ini_file('../config.ini');
$host = $iniFile['host'];
$user = $iniFile['user'];
$password = $iniFile['password'];
$name = $iniFile['name'];
$dsn = "mysql:host=$host;dbname=$name";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

$pdo = new PDO($dsn, $user, $password, $options);
$dbc = mysqli_connect($iniFile['host'], $iniFile['user'], $iniFile['password'], $iniFile['name']);

function view($view, $data)
{
    foreach ($data as $key => $value){
        $$key = $value;
    }
    include 'views/' . $view . '.php';
}