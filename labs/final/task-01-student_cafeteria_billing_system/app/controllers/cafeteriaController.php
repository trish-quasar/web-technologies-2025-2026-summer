<?php

require_once "app/models/CafeteriaModel.php";

function cafeteriaController()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $studentName = $_POST["studentName"];
        $studentId = $_POST["studentId"];

        $burgerSelected = isset($_POST["burger"]);
        $pizzaSelected = isset($_POST["pizza"]);
        $sandwichSelected = isset($_POST["sandwich"]);
        $coffeeSelected = isset($_POST["coffee"]);

        $burgerQuantity = (int) $_POST["burgerQuantity"];
        $pizzaQuantity = (int) $_POST["pizzaQuantity"];
        $sandwichQuantity = (int) $_POST["sandwichQuantity"];
        $coffeeQuantity = (int) $_POST["coffeeQuantity"];


        $bill = calculateBill(
            $burgerSelected,
            $burgerQuantity,
            $pizzaSelected,
            $pizzaQuantity,
            $sandwichSelected,
            $sandwichQuantity,
            $coffeeSelected,
            $coffeeQuantity
        );

        include "app/views/cafeteria/bill.php";
    } else {
        include "app/views/cafeteria/form.php";
    }
}
