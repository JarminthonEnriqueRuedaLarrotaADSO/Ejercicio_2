<?php 

session_start();

include "Operaciones.php";

    $clase = new Operaciones;
    $clase->setNumero($_POST['naranjas']);
    // $clase->tomarDatos();
    $clase->calculo();


    //  header("Location:index.php");















?>