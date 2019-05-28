<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>
<a href="logout.php">Log out</a>
<a href="addproduct.php">Add product</a>
<table>
    <tr><th>Image</th></tr>
<?php
while ($product = mysqli_fetch_assoc($products)){
    echo '<tr><td><img src='.$product["image_url"].' style="width:64px"/></td></tr>';
}
?>
</table>
</body>
</html>
