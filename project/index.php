<?php
require 'config.php';
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($dbc, $_POST['email']);
    $password = mysqli_real_escape_string($dbc, $_POST['password']);
    $users = mysqli_query($dbc, "SELECT * FROM `users` WHERE email = '$email' and password = '$password'");
    if (mysqli_num_rows($users) == 1) {
        $_SESSION['islogged'] = true;
        header('Location: index.php');
    }
}
if (@$_SESSION['islogged'] === true) {
    include 'logged.php';
} else {
    include 'views/welcome.php';
}