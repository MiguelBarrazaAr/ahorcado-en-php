<?php
function elegirPalabra() {
$palabras = ["arbol", "casa", "mundo", "oro"];
$x = rand(0,count($palabras)-1);
return $palabras[$x];
}

?>