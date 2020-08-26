<?php
session_start();

function elegirPalabra() {
$palabras = ["arbol", "casa", "mundo", "oro"];
$x = rand(0,count($palabras)-1);
return $palabras[$x];
}



if(isset($_SESSION["palabra"])) {
$elegido = $_SESSION["palabra"];
print("su palabra es: $elegido");
} else {
$elegido = elegirPalabra();
print("no existe, entonces elijo: $elegido");
$_SESSION["palabra"] = $elegido;
}


?>