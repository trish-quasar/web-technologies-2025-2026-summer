<?php

$studentName = "Rahim Ahmed";
$studentId = "23-12345-1";

$choice = 1;
$quantity = 6;

$foodItem = "";
$price = 0;


switch ($choice) {
    case 1:
        $foodItem = "Burger";
        $price = 5;
        break;

    case 2:
        $foodItem = "Pizza";
        $price = 8;
        break;

    case 3:
        $foodItem = "Sandwich";
        $price = 4;
        break;

    case 4:
        $foodItem = "Coffee";
        $price = 3;
        break;

    default:
        $foodItem = "Invalid Item";
        $price = 0;
}


$subtotal = $price * $quantity;


if ($subtotal >= 30) {
    $discount = 20;
} else if ($subtotal >= 20) {
    $discount = 10;
} else {
    $discount = 0;
}


$discountAmount = $subtotal * $discount / 100;

$finalBill = $subtotal - $discountAmount;

?>

<!DOCTYPE html>
<html>

<head>
    <title>Cafeteria Bill</title>
</head>

<body>

    <pre>

================================
       UNIVERSITY CAFETERIA
================================

Student Name : <?php echo $studentName; ?>

Student ID   : <?php echo $studentId; ?>

Food Item    : <?php echo $foodItem; ?>

Price        : $<?php echo $price; ?>

Quantity     : <?php echo $quantity; ?>


Ordered Items:

<?php

for ($i = 1; $i <= $quantity; $i++) {
    echo "Item " . $i . ": " . $foodItem . "\n";
}

?>

Subtotal     : $<?php echo $subtotal; ?>

Discount     : <?php echo $discount; ?>%

Discount Amt : $<?php echo $discountAmount; ?>

Final Bill   : $<?php echo $finalBill; ?>


Thank you for visiting!

================================

</pre>

</body>

</html>
