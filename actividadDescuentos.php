<?php
 $nombre = "Gianluigi";
 $compra = 350;

 

 if($compra < 50) {
    $descuento = 0.05;
 } elseif($compra >= 50 && $compra < 100) {
    $descuento = 0.1;
 } elseif($compra >= 100 && $compra <= 250) {
    $descuento = 0.15;
 } elseif($compra > 250 && $compra < 400) {
    $descuento = 0.2;
 } else {
    $descuento = 0;
 }

 $precioFinal = $compra - ($compra * $descuento);

 echo "Hola, " . $nombre .  ", el precio de tu compra es: $" . $compra . ". El precio final  con descuento es: " . $precioFinal;

?>