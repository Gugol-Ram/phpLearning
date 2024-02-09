<?php
//enviar un mensaje solo si contiene menos de 100 caracteres. sino arrojar msg de error.
$total_letras = strlen("Hola, buenos dias, como has estado?, Hola, buenos dias, como has estado?, Hola, buenos dias, como has estado?");

if(
  $total_letras < 100
) {
  echo "El mensaje fue enviado exitosamente";
} else {
  echo "El mensaje no pudo ser enviado porque contiene " . $total_letras . " caracteres";
}

// indica si hablan español u otro idioma.
 echo '<br>';
$pais = "Canada";

if($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
  echo "Aqui se habla español";
} else {
  echo "Aqui se habla otro idioma";
}

?>