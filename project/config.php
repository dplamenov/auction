<?php
session_start();
$iniFile = parse_ini_file('../config.ini');
$dbc = mysqli_connect($iniFile['host'], $iniFile['user'], $iniFile['password'], $iniFile['name']);

function view($view, $data)
{
    foreach ($data as $key => $value){
        $$key = $value;
    }
    include 'views/' . $view . '.php';
}