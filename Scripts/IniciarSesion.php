<?php
include("Clases/clsUsuario.php");
include("Clases/Modelo.php");

$conn = new Modelo();

if (isset($_POST['Loguear'])) {
    $ObjBD = new clsUsuario(null,$_POST["Correo"], $_POST["Contraseña"]);
    
    if (!$ObjBD->LoguearUsuario($conn->conectar())) {
        $_SESSION['mensaje'] = 'Correo o contraseña incorrectas';
        $_SESSION['color'] = 'danger';
    }
}
