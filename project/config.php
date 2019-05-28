<?php
session_start();
$dbc = mysqli_connect('localhost', 'root', '', 'auction');

function view($view, $data)
{
    foreach ($data as $key => $value){
        $$key = $value;
    }
    include 'views/' . $view . '.php';
}