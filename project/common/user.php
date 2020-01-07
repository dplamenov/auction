<?php
function login($data, $dbc)
{
    $email = mysqli_real_escape_string($dbc, $data['email']);
    $password = mysqli_real_escape_string($dbc, $data['password']);
    $users = mysqli_query($dbc, "SELECT * FROM `users` WHERE email = '$email' and password = '$password'");
    if (mysqli_num_rows($users) == 1) {
        $_SESSION['islogged'] = true;
        header('Location: index.php');
    }
}

function register($data, $dbc)
{
    $errors = [];
    $email = $data['email'];
    $pass = $data['password'];
    $pass2 = $data['password2'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email must be a valid email.';
    }
    if (mb_strlen($pass) < 8) {
        $errors[] = 'Length of password must be more or equal to 8.';
    }
    if ($pass !== $pass2) {
        $errors[] = 'Password repeat and password are different.';
    }
    $json = json_encode($errors);
    echo $json;
}