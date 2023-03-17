<?php
include("../Clases/Modelo.php");
include("../Clases/clsLector.php");

$conexion = new Modelo();
$lector = new clsLector();

//Borrar  mediante el ID obtenido por url
if (isset($_GET['deleteID'])) {
    $id = $_GET['deleteID'];

    $lector->BorrarLector($conexion, $id);
}

//Obtener arreglo de campos del usuario
if (isset($_GET['updateID'])) {
    $id = $_GET['updateID'];

    $fila = $lector->ObtenerRegistro($conexion, $id);

    //Datos obtenidos por GET
    $ObtMatricula  = $fila['Matricula'];
    $ObtNombre     = $fila['Nombre'];
    $ObtDireccion  = $fila['Direccion'];
}

//Actualizar
if (isset($_POST['Actualizar'])) {
    $id = $_GET['id'];
    // echo "<script>alert(ID: '$id')</script>";
    $Matricula = $_POST['Usuario'];
    $Nombre    = $_POST['Correo'];
    $Direccion = $_POST['Contraseña'];

    $NuevoLector = new clsLector($Matricula,  $Nombre, $Direccion);
    $NuevoLector->ActualizarLector($conexion,$id);
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
            <legend>Actualizar Lector</legend>
            <p>
                <label>Matricula</label>
                <input type="text" name="Usuario" value="<?php echo $ObtMatricula ?>" required />
            </p>

            <p>
                <label>Nombre</label>
                <input type="text" name="Correo" value="<?php echo $ObtNombre ?>" required />
            </p>

            <p>
                <label>Dirección</label>
                <input type="" name="Contraseña" value="<?php echo $ObtDireccion ?>" required />
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