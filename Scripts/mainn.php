<?php
include("Clases/Modelo.php");
$conn = new Modelo();

if (isset($_GET['deleteID'])) {
    $id = $_GET['deleteID'];
    $Query = "DELETE FROM Usuario WHERE ID = $id";

    $resultado = mysqli_query($conn->conectar(), $Query);

    if (!$resultado) {
        die("Operaqción fallida");
    }
    header("Location: http://localhost/php/SIMA/Index.php");
}

if (isset($_GET['updateID'])) {
    $id = $_GET['updateID'];

    $Query = "SELECT* FROM Usuario WHERE ID = $id";
    $resultado = mysqli_query($conn->conectar(), $Query);

    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_array($resultado);

        $Usuario = $fila['Usuario'];
        $Correo = $fila['Correo'];
        $Contraseña = $fila['Contraseña'];
    }
}

if (isset($_POST['Actualizar'])) {
    $id = $_GET['id'];

    // echo "<script>alert(ID: '$id')</script>";

    $Usuario    = $_POST['Usuario'];
    $Correo     = $_POST['Correo'];
    $Contraseña = $_POST['Contraseña'];

    $Query = "UPDATE Usuario SET Usuario = '$Usuario', Correo = '$Correo', Contraseña = '$Contraseña' WHERE ID = '$id'";
    mysqli_query($conn->conectar(), $Query);

    header("Location: http://localhost/php/SIMA/Index.php");
}

?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Header.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<div class="contenedor">
    <header>
        <h1>SIMA</h1>
    </header>

    <form class="formularioUno" action="mainn.php?id=<?php echo $_GET['updateID'];?>" method="POST" name="signup-form">
        <!-- ../Scripts/main.php -->
        <fieldset>
            <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
            <legend>Actualizar Usuario</legend>
            <p>
                <label>Usuario</label>
                <input type="text" name="Usuario" value="<?php echo $Usuario ?>" required />
            </p>

            <p>
                <label>Correo</label>
                <input type="email" name="Correo" value="<?php echo $Correo ?>" required />
            </p>

            <p>
                <label>Contraseña</label>
                <input type="" name="Contraseña" value="<?php echo $Contraseña ?>" required />
            </p>

            <p>
                <input type="submit" name="Actualizar" value="Actualizar">
            </p>
            <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
        </fieldset>
    </form>
</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Footer.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->