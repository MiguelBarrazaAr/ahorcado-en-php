<?php
session_start();
include("elegir.php");


if(isset($_SESSION["palabra"])) {
$elegido = $_SESSION["palabra"];
print("su palabra es: $elegido");
} else {
$elegido = elegirPalabra();
print("no existe, entonces elijo: $elegido");
$_SESSION["palabra"] = $elegido;
}


?>