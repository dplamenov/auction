<?php
require 'config.php';

$errors = [];
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email must be a valid email';
}
if (count($errors) === 0) {
    $stmt = $pdo->prepare('SELECT * FROM `users` WHERE email = ? and password = ?');
    $r = $stmt->execute(array($_POST['email'], $_POST['password']));
    if (!$stmt->fetch()) {
        $_SESSION['islogged'] = true;
        echo 'done';
    }
} else {
    echo json_encode($errors);
}