<?php

session_start();

$_SESSION["nombre"] = $_POST["nombre"];
$_SESSION["apellido"] = $_POST["apellido"];


echo "<h1>Datos recibidos :</h1>";
echo "<br>";
echo "<p>El nombre del usuario es: " . $_POST["nombre"] . "</p>";
echo "<p>El apellido del usuario es: " .  $_POST["apellido"] . "</p>";

?>