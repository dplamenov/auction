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
    <tr><th>Image</th><th>Product Title</th><th>Start price</th><th>Current price</th><th>Auction start</th><th>Auction end</th></tr>
<?php
while ($product = mysqli_fetch_assoc($products)){
    echo '<tr><td><img src='.$product["image_url"].' style="width:64px"/></td>
<td style="padding: 0; vertical-align: top">'.$product['product_title'].'</td><td style="padding: 0; vertical-align: top">'.$product['start_price'].'</td>
<td style="padding: 0; vertical-align: top">'.$product['price'].'</td><td style="padding: 0; vertical-align: top">'.date('d.m.Y H:i:s', intval($product['start'])).'</td>
<td style="padding: 0; vertical-align: top">'.date('d.m.Y H:i:s', intval($product['end'])).'</td></tr>';
}
?>
</table>
</body>
</html>