<?php

echo "<h2>Commonly Used PHP Built-in Functions</h2>";


// 1. strlen()
$text = "Hello PHP";

echo "strlen(): " . strlen($text);
echo "<br><br>";


// 2. str_word_count()
$text = "PHP is easy to learn";

echo "str_word_count(): " . str_word_count($text);
echo "<br><br>";


// 3. str_contains()
$text = "I am learning PHP";

var_dump(str_contains($text, "PHP"));
echo "<br><br>";


// 4. strpos()
$text = "Hello PHP";

echo "strpos(): " . strpos($text, "PHP");
echo "<br><br>";


// 5. strtoupper()
$text = "hello php";

echo "strtoupper(): " . strtoupper($text);
echo "<br><br>";


// 6. strtolower()
$text = "HELLO PHP";

echo "strtolower(): " . strtolower($text);
echo "<br><br>";


// 7. str_replace()
$text = "I like Java";

echo "str_replace(): " . str_replace("Java", "PHP", $text);
echo "<br><br>";


// 8. strrev()
$text = "Hello";

echo "strrev(): " . strrev($text);
echo "<br><br>";


// 9. trim()
$text = "   Hello PHP   ";

echo "trim(): " . trim($text);
echo "<br><br>";


// 10. explode()
$text = "Burger,Pizza,Coffee";

$foods = explode(",", $text);

echo "explode(): ";
print_r($foods);

echo "<br><br>";


// 11. implode()
$foods = ["Burger", "Pizza", "Coffee"];

echo "implode(): " . implode(", ", $foods);
echo "<br><br>";


// 12. substr()
$text = "Hello PHP";

echo "substr(): " . substr($text, 0, 5);
echo "<br><br>";


// 13. is_int()
$number = 10;

echo "is_int(): ";
var_dump(is_int($number));

echo "<br><br>";


// 14. is_float()
$number = 10.5;

echo "is_float(): ";
var_dump(is_float($number));

echo "<br><br>";


// 15. is_nan()
$value = NAN;

echo "is_nan(): ";
var_dump(is_nan($value));

echo "<br><br>";


// 16. is_numeric()
$value = "100";

echo "is_numeric(): ";
var_dump(is_numeric($value));

echo "<br><br>";


// 17. round()
$number = 10.67;

echo "round(): " . round($number);
echo "<br><br>";




// 18. define()
define("UNIVERSITY", "AIUB");

echo "define(): " . UNIVERSITY;
echo "<br><br>";




// 19. date_default_timezone_set()
date_default_timezone_set("Asia/Dhaka");

echo "Timezone has been set to Asia/Dhaka";
echo "<br><br>";




// 20. date_default_timezone_get()
echo "date_default_timezone_get(): ";
echo date_default_timezone_get();

echo "<br><br>";




// 21. date()
echo "date(): " . date("d-m-Y");
echo "<br><br>";




// 22. strtotime()
$date = strtotime("2026-08-09");

echo "strtotime(): " . $date;
echo "<br><br>";

echo "Converted Date: " . date("d-m-Y", $date);
echo "<br><br>";




// 23. time()
echo "time(): " . time();
echo "<br><br>";




// 24. include
echo "<b>include:</b><br>";

include "include.php";

echo "<br><br>";




// 25. require
echo "<b>require:</b><br>";

require "require.php";

echo "<br><br>";




// 26. json_encode()
$student = [
    "name" => "Rahim",
    "id" => "23-12345-1"
];

$jsonData = json_encode($student);

echo "json_encode(): " . $jsonData;
echo "<br><br>";




// 27. json_decode()
$jsonText = '{"name":"Rahim","id":"23-12345-1"}';

$phpData = json_decode($jsonText, true);

echo "json_decode(): ";
print_r($phpData);

echo "<br><br>";




// 28. array()
$foods = array("Burger", "Pizza", "Coffee");

echo "array(): ";
print_r($foods);

echo "<br><br>";




// 29. array_keys()
$student = [
    "name" => "Rahim",
    "id" => "23-12345-1",
    "department" => "CSE"
];

$keys = array_keys($student);

echo "array_keys(): ";
print_r($keys);

echo "<br><br>";




// 30. array_merge()
$array1 = ["Burger", "Pizza"];
$array2 = ["Coffee", "Sandwich"];

$allFoods = array_merge($array1, $array2);

echo "array_merge(): ";
print_r($allFoods);

echo "<br><br>";




// 31. array_push()
$foods = ["Burger", "Pizza"];

array_push($foods, "Coffee");

echo "array_push(): ";
print_r($foods);

echo "<br><br>";




// 32. array_reverse()
$numbers = [1, 2, 3, 4, 5];

$reversed = array_reverse($numbers);

echo "array_reverse(): ";
print_r($reversed);

echo "<br><br>";




// 33. sizeof()
$foods = ["Burger", "Pizza", "Coffee"];

echo "sizeof(): " . sizeof($foods);
echo "<br><br>";




// 34. count()
$foods = ["Burger", "Pizza", "Coffee"];

echo "count(): " . count($foods);
echo "<br><br>";




// 35. sort()
$numbers = [5, 2, 8, 1, 3];

sort($numbers);

echo "sort(): ";
print_r($numbers);

echo "<br><br>";
