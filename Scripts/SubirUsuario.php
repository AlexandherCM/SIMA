<?php 
include("Clases/Modelo.php");
include("Clases/clsUsuario.php");

$conexion = new Modelo();

if(isset($_POST['SubirUsuario'])){
    $ObjBD = new clsUsuario($_POST["Usuario"],$_POST["Correo"], $_POST["Contraseña"]); 
    $ObjBD->SubirUsuario($conexion->conectar());  

    // $_SESSION['mensaje'] = 'Usuario Guardado satisfactoriamente';
    // $_SESSION['color'] = 'success';
}

?>



