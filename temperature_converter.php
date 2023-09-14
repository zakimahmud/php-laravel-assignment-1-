<?php

// Declare the temperature variables
$celsius1 = 20;
$celsius2 = 30;
$celsius3 = 40;

// Converting temperatures into Fahrenheit
$fahrenheit1 = (9 / 5) * $celsius1 + 32;
$fahrenheit2 = (9 / 5) * $celsius2 + 32;
$fahrenheit3 = (9 / 5) * $celsius3 + 32;

// Display the converted temperatures in Fahrenheit
echo "<h1>Converted Temperatures</h1>";
echo "$celsius1 Celsius = $fahrenheit1 Fahrenheit<br>";
echo "$celsius2 Celsius = $fahrenheit2 Fahrenheit<br>";
echo "$celsius3 Celsius = $fahrenheit3 Fahrenheit<br>";

?>