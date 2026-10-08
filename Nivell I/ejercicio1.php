<?php

session_start();

$_SESSION["nombre"] = $_POST["nombre"];
$_SESSION["apellido"] = $_POST["apellido"];


echo $_POST["nombre"] . " " . $_POST["apellido"];

?>