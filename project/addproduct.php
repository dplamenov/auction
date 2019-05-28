<a href="logged.php">Go back</a>
<?php
require 'config.php';
if($_SESSION['islogged'] !== true){
    header('Location: index.php');
    exit;
}