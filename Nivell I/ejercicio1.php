<?php

session_start();

$_SESSION["nom"] = $_POST["nom"];
$_SESSION["cognom"] = $_POST["cognom"];


echo $_POST["nom"] . " " . $_POST["cognom"];

?>