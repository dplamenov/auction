<a href="logout.php">Log out</a>
<a href="addproduct.php">Add product</a>
<?php
if($_SESSION['islogged'] !== true){
    header('Location: index.php');
    exit;
}
$products = mysqli_query($dbc, "SELECT * FROM products");
while ($product = mysqli_fetch_assoc($products)){
    echo '<pre>' . print_r($product, true) . '</pre>';
}