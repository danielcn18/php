<?php

$initPrice = (float)$_POST['price'];
$qty = $_POST['quantity'];
$discount = $_POST['discount'];
$tax = .075;
$shipping = $_POST['shipping'];
$payNum = (int)$_POST['payments'];

$total = (($qty * $initPrice) - ($qty * ($initPrice * $discount))) + ($qty * ($initPrice * $tax));
$price = $initPrice * $qty;
$discView = $discount * 100;
$discNum = $price * $discount; 
$taxNum = ($tax * $initPrice) * $qty; 
$paymPrice = number_format($total / $payNum, 2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Receipt</title>
</head>
<body>
    <div id="content">
        <h2>Options Chosen: </h2>
        <table id="inputs">
            <tr>
                <td>Price </td>
                <td>$<?php echo $price; ?></td>
            </tr>
            <tr>
                <td>Quantity </td>
                <td><?php echo $qty; ?></td>
            </tr>
                <td>Discount </td>
                <td><?php echo $discView; ?>%</td>
            </tr>
            <tr>
                <td>Tax </td>
                <td>7.5% </td>
            </tr>
            <tr>
                <td>Shipping Price </td>
                <td>$<?php echo $shipping; ?><td>
            </tr>
            <tr>
                <td>Number of Payments</td>
                <td><?php echo $payNum; ?></td>
            </tr>
        </table>
        <br><br>

        <h2>Results: </h2>
        <table id="outputs">
            <tr>
                <td>Base Cost </td>
                <td>$<?php echo $initPrice; ?></td>
            </tr>
            <tr>
                <td>Discount </td>
                <td>$<?php echo $discNum; ?></td>
            </tr>
            <tr>
                <td>Tax </td>
                <td>$<?php echo $taxNum; ?></td>
            </tr>
            <tr>
                <td>Total </td>
                <td>$<?php echo $total; ?></td>
            </tr>
            <tr>
                <td>Each Payment Cost</td>
                <td>$<?php echo $paymPrice; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>