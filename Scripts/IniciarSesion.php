<?php
include("ConnBD.php");
include("Clases/clsLoguear.php");

if (isset($_POST['Loguear'])) {
    $ObjBD = new clsLoguear($_POST["Correo"], $_POST["Contraseña"]);
    
    if (!$ObjBD->LoguearUsuario($conexion)) {
        $_SESSION['mensaje'] = 'Correo o contraseña incorrectas';
        $_SESSION['color'] = 'danger';
    }
}
