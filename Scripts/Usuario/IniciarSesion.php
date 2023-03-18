<?php
include("Scripts/Clases/clsUsuario.php");
include("Scripts/Clases/Modelo.php");

$conn = new Modelo();

if (isset($_POST['Loguear'])) {
    $ObjBD = new clsUsuario(null, $_POST["Correo"], $_POST["Contraseña"]);

    if (!$ObjBD->LoguearUsuario($conn->conectar())) {

        $mensaje = 'Correo o contraseña incorrectas';
        $color   = 'danger';

        header("Location: http://localhost/php/SIMA/Index.php?mensaje=$mensaje&color=$color");
    }
}
?>