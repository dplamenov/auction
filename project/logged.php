
<?php
if($_SESSION['islogged'] !== true){
    header('Location: index.php');
    exit;
}
$products = mysqli_query($dbc, "SELECT * FROM products");
view('products');