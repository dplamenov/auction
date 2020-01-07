<?php
require 'config.php';

$errors = [];
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email must be a valid email';
}
if (count($errors) === 0) {
    $stmt = $pdo->prepare('SELECT * FROM `users` WHERE email = ? and password = ?');
    $stmt->execute(array($_POST['email'], $_POST['password']));
    var_dump($stmt->fetch());
} else {
    echo json_encode($errors);
}
$email = mysqli_real_escape_string($dbc, $_POST['email']);
$password = mysqli_real_escape_string($dbc, $_POST['password']);
$users = mysqli_query($dbc, "SELECT * FROM `users` WHERE email = '$email' and password = '$password'");
if (mysqli_num_rows($users) == 1) {
    $_SESSION['islogged'] = true;
    header('Location: index.php');
}