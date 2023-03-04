<?php

include("../Clases/Modelo.php");
include("../Clases/clsUsuario.php");

$conexion = new Modelo();
$usuario = new clsUsuario();

//Borrar  mediante el ID obtenido por url
if (isset($_GET['deleteID'])) {
    $id = $_GET['deleteID'];

    $usuario->BorrarUsuario($conexion, $id);
}

//Obtener arreglo de campos del usuario
if (isset($_GET['updateID'])) {
    $id = $_GET['updateID'];

    $fila = $usuario->ObtenerRegistro($conexion, $id);

    //Datos obtenidos por GER
    $ObtUsuario    = $fila['Usuario'];
    $ObtCorreo     = $fila['Correo'];
    $ObtContraseña = $fila['Contraseña'];
}

//Actualizar
if (isset($_POST['Actualizar'])) {
    $id = $_GET['id'];
    // echo "<script>alert(ID: '$id')</script>";
    $Usuario    = $_POST['Usuario'];
    $Correo     = $_POST['Correo'];
    $Contraseña = $_POST['Contraseña'];

    $NuevoUsuario = new clsUsuario($Usuario,  $Correo, $Contraseña);
    $NuevoUsuario->ActualizarUsuario($conexion,$id);
}

?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../../Recursos/Includes/Header.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<div class="contenedor">
    <header>
        <h1>SIMA</h1>
    </header>

    <form class="formularioUno" action="Main.php?id=<?php echo $_GET['updateID'];?>" method="POST" name="signup-form">
        <!-- ../Scripts/main.php -->
        <fieldset>
            <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
            <legend>Actualizar Usuario</legend>
            <p>
                <label>Usuario</label>
                <input type="text" name="Usuario" value="<?php echo $ObtUsuario ?>" required />
            </p>

            <p>
                <label>Correo</label>
                <input type="email" name="Correo" value="<?php echo $ObtCorreo ?>" required />
            </p>

            <p>
                <label>Contraseña</label>
                <input type="" name="Contraseña" value="<?php echo $ObtContraseña ?>" required />
            </p>

            <p>
                <input type="submit" name="Actualizar" value="Actualizar">
            </p>
            <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
        </fieldset>
    </form>
</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../../Recursos/Includes/Footer.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->