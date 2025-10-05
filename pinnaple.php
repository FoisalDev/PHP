<?php
$quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 0;
$hd = isset($_POST['hd']) && $_POST['hd'] === 'yes' ? true : false;
$address = isset($_POST['address']) ? $_POST['address'] : '';
$tip = isset($_POST['tip']) ? (float)$_POST['tip'] : 0.0;

$base = $quantity * 12.5;

if ($quantity >= 1 && $quantity <= 9) {
    $base = $base * 0.90;
} elseif ($quantity >= 10 && $quantity <= 19) {
    $base = $base * 0.85;
} elseif ($quantity >= 20) {
    $base = $base * 0.80;
}

if ($hd) {
    $base = $base + 40;
}

if ($address == 'dhk') {
    $base = $base * 1.20;
} else {
    $base = $base * 1.15;
}

$base = $base + $tip;

// Format the output to 2 decimal places
$total_bill = number_format($base, 2);

echo "Your total bill is $total_bill BDT";
?>
