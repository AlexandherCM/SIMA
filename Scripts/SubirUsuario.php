<?php 
include("ConnBD.php");
include("Clases/clsSubirUsuario.php");

if(isset($_POST['SubirUsuario'])){
    $ObjBD = new clsSubirUsuario($_POST["Usuario"],$_POST["Correo"], $_POST["Contraseña"]); 
    $ObjBD->SubirUsuario($conexion);  

    $_SESSION['mensaje'] = 'Usuario Guardado satisfactoriamente';
    $_SESSION['color'] = 'success';
}

?>



