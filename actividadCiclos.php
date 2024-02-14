<?php

$numero = 10;
$factorial = 1;

for ($x = 1; $x <= $numero; $x++) {

  $factorial = $factorial * $x;
}
echo "El factorial del número $numero es: $factorial" . "<br>";
