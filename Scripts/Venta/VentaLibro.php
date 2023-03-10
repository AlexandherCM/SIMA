<?php
include("../Scripts/Clases/Modelo.php"); 
include("../Scripts/Clases/clsVenta.php");

$conexion = new Modelo();
$venta = new clsVenta();

if (isset($_POST['SubirVenta'])) {
    $folio            = strtoupper("TV".uniqid());
    $libroID          = $_POST["nombreLibro"];
    $lectorID         = $_POST["nombreLector"];
    $unidades         = $_POST["unidades"];
    $precioU          = $_POST["precio"];
    
    $ObjBD = new clsVenta(
        $folio,
        $libroID,
        $lectorID,
        $unidades,
        $precioU
    );

    $ObjBD->SubirVenta($conexion->conectar());
}

?>