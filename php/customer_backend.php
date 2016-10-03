<?php
$price1 = 1;
$price2 = 5;
$price3 = 10;

$quantity1 = $_POST["quantity1"];
$quantity2 = $_POST["quantity2"];
$quantity3 = $_POST["quantity3"];

$shipping = $_POST["shipping"];
if($shipping == '7'){
  $shipping_name = "Seven day";
  $shipping_price = 0;
}
elseif($shipping == '3'){
  $shipping_name = "Three day";
  $shipping_price = 5;
}
elseif($shipping == '1'){
  $shipping_name = "Overnight";
  $shipping_price = 5;
}

$subtotal1 = $quantity1*$price1;
$subtotal2 = $quantity2*$price2;
$subtotal3 = $quantity3*$price3;

echo "<table><tr><tc></tc><tc>Quantity</tc><tc>Cost Per Item</tc><tc>Sub Total</tc></tr>";
echo "<tr><tc>Item 1</tc><tc>" . $quantity1 . "</tc><tc>$1.00</tc><tc> $" . $subtotal1 . "</tc></tr>";
echo "<tr><tc>Item 2</tc><tc>" . $quantity2 . "</tc><tc>$5.00</tc><tc> $" . $subtotal2 . "</tc></tr>";
echo "<tr><tc>Item 3</tc><tc>" . $quantity3 . "</tc><tc>$10.00</tc><tc> $" . $subtotal3 . "</tc></tr>";

echo "<tr><tc>Shipping</tc><tc>" . $shipping_name . "</tc><tc> $" . $shipping_price . "</tc></tr>";
echo "<tr><tc>Total Cost</tc><tc>$" . ($subtotal1 + $subtotal2 + $subtotal3 + $shipping_price) . "</tc></tr>";
echo "</table>";
?>
