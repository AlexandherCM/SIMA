<?php
include("../Clases/Modelo.php"); 
include("../Clases/clsLector.php");

$conexion = new Modelo();

if (isset($_POST['SubirLector'])) {

    $matricula        = $_POST["Matricula"];
    $nombre           = $_POST["Nombre"];
    $direccion        = $_POST["Direccion"];
    
    $ObjBD = new clsLector(
        $matricula,
        $nombre,
        $direccion,  
    );

    $ObjBD->SubirLector($conexion->conectar());
    header("Location: http://localhost/php/SIMA/Vistas/Prestamo.php");
}

?>