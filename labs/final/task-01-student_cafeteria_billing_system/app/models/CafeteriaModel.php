<?php

function getPrice($choice)
{
    switch ($choice) {
        case 1:
            return 5;

        case 2:
            return 8;

        case 3:
            return 4;

        case 4:
            return 3;

        default:
            return 0;
    }
}


function calculateBill(
    $burgerSelected,
    $burgerQuantity,
    $pizzaSelected,
    $pizzaQuantity,
    $sandwichSelected,
    $sandwichQuantity,
    $coffeeSelected,
    $coffeeQuantity
) {
    $burgerPrice = 0;
    $pizzaPrice = 0;
    $sandwichPrice = 0;
    $coffeePrice = 0;


    if ($burgerSelected) {
        $burgerPrice = getPrice(1);
    }

    if ($pizzaSelected) {
        $pizzaPrice = getPrice(2);
    }

    if ($sandwichSelected) {
        $sandwichPrice = getPrice(3);
    }

    if ($coffeeSelected) {
        $coffeePrice = getPrice(4);
    }


    $burgerTotal = $burgerPrice * $burgerQuantity;
    $pizzaTotal = $pizzaPrice * $pizzaQuantity;
    $sandwichTotal = $sandwichPrice * $sandwichQuantity;
    $coffeeTotal = $coffeePrice * $coffeeQuantity;


    $subtotal = $burgerTotal
        + $pizzaTotal
        + $sandwichTotal
        + $coffeeTotal;


    if ($subtotal >= 30) {
        $discount = 20;
    } else if ($subtotal >= 20) {
        $discount = 10;
    } else {
        $discount = 0;
    }


    $discountAmount = $subtotal * $discount / 100;

    $finalBill = $subtotal - $discountAmount;


    return [
        "burgerPrice" => $burgerPrice,
        "pizzaPrice" => $pizzaPrice,
        "sandwichPrice" => $sandwichPrice,
        "coffeePrice" => $coffeePrice,

        "burgerTotal" => $burgerTotal,
        "pizzaTotal" => $pizzaTotal,
        "sandwichTotal" => $sandwichTotal,
        "coffeeTotal" => $coffeeTotal,

        "subtotal" => $subtotal,
        "discount" => $discount,
        "discountAmount" => $discountAmount,
        "finalBill" => $finalBill
    ];
}
