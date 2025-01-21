<?php
echo "Hello World! <br>";
// print_r($_GET);
// var_dump($_GET);
echo "Welcome: ". $_GET["firstname"];

$fruits = array("apple", "cherry", "banana");
$fruits["first_name"] = $_GET["firstname"];
$fruits["animal"] = "wolf";
array_push ($fruits, "orange", "kiwi", " lemon");

echo "<pre>";
var_dump($fruits);
print_r($fruits[1]);
?>