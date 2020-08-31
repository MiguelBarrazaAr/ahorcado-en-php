<?php
session_start();
include("elegir.php");


if(isset($_SESSION["palabra"])) {
$palabra = $_SESSION["palabra"];
} else {
$palabra = elegirPalabra();
$_SESSION["palabra"] = $elegido;
}

$cantidad = strlen($palabra);
print("la palabra tiene: $cantidad  caracteres<br>");

if($_POST) {
$letra = $_POST["letra"];
print("escribiste la letra $letra<br>");
}
?>

<form action="" method="post">
<p>escriba una letra</p>
<label>letra:
<input type="text" name="letra">
</label>
<input type="submit" value="probar">
</form>