<!DOCTYPE html>
<html>

<head>
    <title>Student Cafeteria Billing System</title>
</head>

<body>

    <h1 style="display:flex; justify-content:center ; align-items:center ">University Cafeteria</h1>

    <form action="index.php" method="post">

        <h3>Student Information</h3>

        <label>Student Name:</label>
        <input type="text" name="studentName" required>

        <br><br>

        <label>Student ID:</label>
        <input type="text" name="studentId" required>


        <h3>Select Food Items</h3>

        <table cellpadding="10">

            <tr>
                <th>Select</th>
                <th>Food Item</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>

            <tr>
                <td>
                    <input type="checkbox" name="burger" value="Burger">
                </td>

                <td>Burger</td>

                <td>$5</td>

                <td>
                    <input type="number" name="burgerQuantity" min="1">
                </td>
            </tr>


            <tr>
                <td>
                    <input type="checkbox" name="pizza" value="Pizza">
                </td>

                <td>Pizza</td>

                <td>$8</td>

                <td>
                    <input type="number" name="pizzaQuantity" min="1">
                </td>
            </tr>


            <tr>
                <td>
                    <input type="checkbox" name="sandwich" value="Sandwich">
                </td>

                <td>Sandwich</td>

                <td>$4</td>

                <td>
                    <input type="number" name="sandwichQuantity" min="1">
                </td>
            </tr>


            <tr>
                <td>
                    <input type="checkbox" name="coffee" value="Coffee">
                </td>

                <td>Coffee</td>

                <td>$3</td>

                <td>
                    <input type="number" name="coffeeQuantity" min="1">
                </td>
            </tr>

        </table>

        <br>

        <input type="submit" value="Generate Bill">

    </form>

</body>

</html>
