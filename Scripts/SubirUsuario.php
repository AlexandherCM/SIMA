<?php 
include("Clases/Modelo.php");
include("Clases/clsSubirUsuario.php");

$conexion = new Modelo();

if(isset($_POST['SubirUsuario'])){
    $ObjBD = new clsSubirUsuario($_POST["Usuario"],$_POST["Correo"], $_POST["Contraseña"]); 
    $ObjBD->SubirUsuario($conexion->conectar());  

    // $_SESSION['mensaje'] = 'Usuario Guardado satisfactoriamente';
    // $_SESSION['color'] = 'success';
}

?>



