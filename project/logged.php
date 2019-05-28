<a href="logout.php">Log out</a>
<a href="addproduct.php">Add product</a>
<?php
if($_SESSION['islogged'] !== true){
    header('Location: index.php');
    exit;
}