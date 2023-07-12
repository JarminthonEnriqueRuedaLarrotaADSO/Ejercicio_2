<?php 
session_start();

include "Operaciones.php";

$clase = new Operaciones;
$clase->setNumero($_POST['naranjas']);
$clase->tomarDatos();
$valorAPagar = $clase->calculo();

$_SESSION['valorAPagar'] = $valorAPagar;

//header("Location: index.php");
?>
