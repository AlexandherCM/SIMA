<?php
include("../Clases/Modelo.php");
include("../Clases/clsLibro.php");

$conexion = new Modelo();
$usuario = new clsLibro();

//Borrar  mediante el ID obtenido por url
if (isset($_GET['deleteID'])) {
    $id = $_GET['deleteID'];

    $usuario->EliminarLibro($conexion, $id);
}

//Obtener arreglo de campos del usuario
if (isset($_GET['updateID'])) {
    $id = $_GET['updateID'];

    $fila = $usuario->ObtenerRegistro($conexion, $id);

    //Datos obtenidos por GER
    $ObtTitulo = $fila['Titulo'];
    $ObtCat    = $fila['CategoriaID'];
    $ObtEd     = $fila['Edicion'];
    $ObtEdit   = $fila['Editorial'];
    $ObtAut    = $fila['Autor'];
    $ObtFec    = $fila['FechaPublicacion'];
    $ObtUni    = $fila['Unidades'];
    $ObtPrc    = $fila['PrecioUnit'];
}

//Actualizar
if (isset($_POST['Actualizar'])) {
    $id = $_GET['id'];
    // echo "<script>alert(ID: '$id')</script>";
    $TituloL        = $_POST['Titulo'];
    $CategoriaID    = $_POST['CategoriaID'];
    $EdicionL       = $_POST['Edicion'];
    $EditorialL     = $_POST['Editorial'];
    $AutorL         = $_POST['Autor'];
    $FechaP         = $_POST['FechaPublicacion'];
    $UnidadesL      = $_POST['Unidades'];
    $PrecioU        = $_POST['PrecioUnit'];

    $LibroAcualizado = new clsLibro($CategoriaID,$TituloL,$EdicionL,$EditorialL,$AutorL,$FechaP,$UnidadesL,$PrecioU,null);
    $LibroAcualizado->ActualizarLibro($conexion,$id);
}

?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../../Recursos/Includes/Header.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<div class="contenedor">
    <header>
        <h1>SIMA</h1>
    </header>

    <form class="formularioUno bg-light" action="Main.php?id=<?php echo $_GET['updateID'];?>" method="POST" name="signup-form">
        <!-- ../Scripts/main.php -->
        <fieldset>
            <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
            <legend>Actualizar Libro</legend>

            <p>
                <label>Titulo</label>
                <input type="text" name="Titulo" value="<?php echo $ObtTitulo ?>" required />
            </p>

            <p>
                <label>Edicion</label>
                <input type="text" name="Edicion" value="<?php echo $ObtEd ?>" required />
            </p>

            <p>
                <label>Editorial</label>
                <input type="text" name="Editorial" value="<?php echo $ObtEdit ?>" required />
            </p>

            <p>
                <label>Autor</label>
                <input type="text" name="Autor" value="<?php echo $ObtAut ?>" required />
            </p>

            <p>
                <label>Unidades</label>
                <input type="number" name="Unidades" value="<?php echo $ObtUni ?>" required />
            </p>
            <p>
                <label>Precio</label>
                <input type="number" name="PrecioUnit" value="<?php echo $ObtPrc ?>" required />
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