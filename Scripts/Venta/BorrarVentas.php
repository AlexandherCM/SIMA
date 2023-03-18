<?php
include("../Clases/Modelo.php");
include("../Clases/clsVenta.php");

$conexion = new Modelo();
$venta = new clsVenta();

if (isset($_GET['delete'])) {
    $venta->BorrarVentas($conexion->conectar());
    header("Location: http://localhost/php/SIMA/Vistas/Ventas.php");
}



?>

