<?php
function saludo($nombre)
{
  echo "Hola " . $nombre . " eres un programador" . '<br>';
}

saludo("Ramiro");


function operaciones($numero1, $numero2, $operacion)
{
  $resultado = 0;

  if ($operacion == 'suma') {
    $resultado = $numero1 + $numero2;
  } elseif ($operacion == 'resta') {
    $resultado = $numero1 - $numero2;
  } elseif ($operacion == 'multiplicacion') {
    $resultado = $numero1 * $numero2;
  } elseif ($operacion == 'division') {
    $resultado = $numero1 / $numero2;
  } else {
    echo "operacion desconocida";
  }

  return $resultado;
}

echo operaciones(5, 7, 'multiplicacion');
