<?php
include("../Scripts/Clases/Modelo.php"); 
include("../Scripts/Clases/clsLibro.php");

$conexion = new Modelo();

if (isset($_POST['SubirLibro'])) {

    if($_POST["precioUnit"] <= 0 || $_POST["unidades"] <= 0){
        die("VALOR INACEPTBLE");
    }


    $categoria        = $_POST["categoria"];
    $titulo           = $_POST["titulo"];
    $edicion          = $_POST["edicion"];
    $editorial        = $_POST["editorial"];
    $autor            = $_POST["autor"];
    $fechaPublicacion = $_POST["fechaPublicacion"];
    $unidades         = $_POST["unidades"];
    $precioUnit       = $_POST["precioUnit"];
    $imagen           = $_FILES["imagen"]["tmp_name"];
    
    $ObjBD = new clsLibro(
        $categoria,
        $titulo,
        $edicion,
        $editorial,
        $autor,
        $fechaPublicacion,
        $unidades,
        $precioUnit,
        $imagen      
    );

    $ObjBD->SubirLibro($conexion->conectar());
}
