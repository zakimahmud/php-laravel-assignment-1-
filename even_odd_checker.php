<?php

// Declare the temperature variable
$temperature = -10;

// Check the temperature range
if ($temperature < 0) {
  echo "It's freezing!";
} elseif ($temperature < 10) {
  echo "It's cool";
} else {
  echo "It's warm";
}

?>