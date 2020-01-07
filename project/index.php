<?php
require 'config.php';
if (@$_SESSION['islogged'] === true) {
    include 'logged.php';
} else {
    include 'views/welcome.php';
}