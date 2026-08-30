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


<?php if ($burgerSelected) { ?>

Food Item : Burger
Price     : $<?php echo $bill["burgerPrice"]; ?>

Quantity  : <?php echo $burgerQuantity; ?>


Ordered Items:
<?php
    for ($i = 1; $i <= $burgerQuantity; $i++) {
        echo "Item " . $i . ": Burger\n";
    }
?>

Item Total : $<?php echo $bill["burgerTotal"]; ?>


--------------------------------

<?php } ?>


<?php if ($pizzaSelected) { ?>

Food Item : Pizza
Price     : $<?php echo $bill["pizzaPrice"]; ?>

Quantity  : <?php echo $pizzaQuantity; ?>


Ordered Items:
<?php
    for ($i = 1; $i <= $pizzaQuantity; $i++) {
        echo "Item " . $i . ": Pizza\n";
    }
?>

Item Total : $<?php echo $bill["pizzaTotal"]; ?>


--------------------------------

<?php } ?>


<?php if ($sandwichSelected) { ?>

Food Item : Sandwich
Price     : $<?php echo $bill["sandwichPrice"]; ?>

Quantity  : <?php echo $sandwichQuantity; ?>


Ordered Items:
<?php
    for ($i = 1; $i <= $sandwichQuantity; $i++) {
        echo "Item " . $i . ": Sandwich\n";
    }
?>

Item Total : $<?php echo $bill["sandwichTotal"]; ?>


--------------------------------

<?php } ?>


<?php if ($coffeeSelected) { ?>

Food Item : Coffee
Price     : $<?php echo $bill["coffeePrice"]; ?>

Quantity  : <?php echo $coffeeQuantity; ?>


Ordered Items:
<?php
    for ($i = 1; $i <= $coffeeQuantity; $i++) {
        echo "Item " . $i . ": Coffee\n";
    }
?>

Item Total : $<?php echo $bill["coffeeTotal"]; ?>


--------------------------------

<?php } ?>


Subtotal     : $<?php echo $bill["subtotal"]; ?>

Discount     : <?php echo $bill["discount"]; ?>%
Discount Amt : $<?php echo $bill["discountAmount"]; ?>

Final Bill   : $<?php echo $bill["finalBill"]; ?>


Thank you for visiting!

================================

</pre>

    <a href="index.php">Make Another Order</a>

</body>

</html>
