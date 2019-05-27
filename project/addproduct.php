<a href="logged.php">Go back</a>
<?php
require 'config.php';
if($_SESSION['islogged'] === true){

}else{
    header('Location: index.php');
}