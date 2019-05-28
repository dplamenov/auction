<?php
session_start();
$dbc = mysqli_connect('localhost', 'root', '', 'auction');

function view($view)
{
    include 'views/' . $view . '.php';
}