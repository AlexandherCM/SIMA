<?php
include("../Clases/Modelo.php");
include("../Clases/clsPrestamo.php");

$conexion = new Modelo();

if (isset($_GET['updateID'])) {
    $id = $_GET['updateID'];

    date_default_timezone_set('America/Mexico_City');
    $Hora = date('H:i:s');
    $Fecha = date('Y-m-d');
    $registro = new clsPrestamo(null, null, null, $Fecha, true);

    $fila = $registro->ObtenerRegistro($conexion, $id);
    $registro->BorrarPrestamo($conexion, $fila['ID']);

    header("Location: http://localhost/php/SIMA/Vistas/Prestamo.php");
}

if(isset($_POST['SubirPrestamo'])){
    $prestamo = new clsPrestamo();

    $ObjBD = new clsPrestamo($_POST["nombreLector"],$_POST["nombreLibro"], $_POST["fechaPrestamo"]); 
    $ObjBD->SubirPrestamo($conexion->conectar());  

    header("Location: http://localhost/php/SIMA/Vistas/Prestamo.php");
}
