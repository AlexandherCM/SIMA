<?php 
include("../Scripts/Clases/Modelo.php");
include("../Scripts/Clases/clsUsuario.php");

$conexion = new Modelo();

if(isset($_POST['SubirUsuario'])){
    $ObjBD = new clsUsuario($_POST["Usuario"],$_POST["Correo"], $_POST["Contraseña"]); 
    $ObjBD->SubirUsuario($conexion->conectar());  

    $mensaje = 'Usuario Guardado satisfactoriamente';
    $color   = 'success';

    header("Location: http://localhost/php/SIMA/Index.php?mensaje=$mensaje&color=$color");
}

?>



