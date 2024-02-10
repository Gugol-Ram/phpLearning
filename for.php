<?php

//imprimir numeros del 1 al 10

for ($i = 1; $i <= 10; $i++) {
  echo $i . "  ";
}
echo '<br>';
echo '<br>';
//mostrar los pares del 0 al 50

for ($i = 0; $i <= 50; $i++) {
  if ($i % 2 == 0) {
    echo $i . "  ";
  }
}
