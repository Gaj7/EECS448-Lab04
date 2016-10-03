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

echo "<table><tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td></tr>";
echo "<tr><td>Item 1</td><td>" . $quantity1 . "</td><td>$1.00</td><td> $" . $subtotal1 . "</td></tr>";
echo "<tr><td>Item 1</td><td>" . $quantity2 . "</td><td>$1.00</td><td> $" . $subtotal2 . "</td></tr>";
echo "<tr><td>Item 1</td><td>" . $quantity3 . "</td><td>$1.00</td><td> $" . $subtotal3 . "</td></tr>";
echo "<tr></tr>";
echo "<tr><td></td><td>Shipping</td><td>" . $shipping_name . "</td><td> $" . $shipping_price . "</td></tr>";
echo "<tr><td></td><td></td><td>Total Cost</td><td>$" . ($subtotal1 + $subtotal2 + $subtotal3 + $shipping_price) . "</td></tr>";
echo "</table>";
?>
