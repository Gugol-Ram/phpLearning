<?php
//imprimir un color favorito, mostrar ejemplo con if-else y switch.

$colorFavorito = "Griss";

//operadores logicos:
if($colorFavorito == "Azul") {
  echo "Tu color favorito es: " . $colorFavorito;
} elseif($colorFavorito == "Rojo") {
  echo "Tu color favorito es: " . $colorFavorito;
} elseif($colorFavorito == "Gris") {
  echo "Tu color favorito es: " . $colorFavorito;
} elseif($colorFavorito == "Violeta") {
  echo "Tu color favorito es: " . $colorFavorito;
} else {
  echo "No hay coincidencias";
}

echo '<br>';

//operador switch
switch($colorFavorito) {
  case "Azul":
    echo "Tu color favorito es: " . $colorFavorito;
    break;
  case "Rojo":
    echo "Tu color favorito es: " . $colorFavorito;
    break;
  case "Gris":
    echo "Tu color favorito es: " . $colorFavorito;
    break;
  case "Violeta":
    echo "Tu color favorito es: " . $colorFavorito;
    break;
  default:
    echo "Tu color no es Azul, Rojo, Gris o Violeta";
}

?>