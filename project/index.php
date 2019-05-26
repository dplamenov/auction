<?php
require 'config.php';
if(isset($_POST['login'])){
    //todo check user
    $_SESSION['islogged'] = true;
    header('Location: index.php');
}
if(@$_SESSION['islogged'] === true){
    include 'logged.php';
}else{
    include 'login_form.php';
}