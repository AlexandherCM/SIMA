<?php
function MostrarLibros()
{
    $Query = "SELECT * FROM libro";
    $conexion = new Modelo();

    $libros = mysqli_query($conexion->conectar(), $Query);

    
    while ($fila = mysqli_fetch_array($libros)) {
        ?>
        <div class="card">
        <h5 class="card-header text-center"><?php echo $fila['Titulo']?></h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 col-sm-8">
                    <p class="card-text">
                        <b>Categoría:        </b> <?php echo $fila['CategoriaID']     ?><br>
                        <b>Edicion:          </b> <?php echo $fila['Edicion']         ?><br>
                        <b>Editorial:        </b> <?php echo $fila['Editorial']       ?><br>
                        <b>Autor:            </b> <?php echo $fila['Autor']           ?><br>
                        <b>Fecha Publicacion:</b> <?php echo $fila['FechaPublicacion']?><br>
                        <b>Disponibles:      </b> <?php echo $fila['Unidades']        ?><br>
                        <b>Precio:           </b> <?php echo $fila['PrecioUnit']      ?><br>
                    </p> 
                    <a class="g-col-6 btn btn-outline-danger" href="../Scripts/Libro/Main.php?deleteID=<?php echo $fila['ID'] ?>" >
                        <i><img class="icono" src="../Recursos/Icons/Delete.svg"></i>
                    </a>
                    <a class="g-col-6 btn btn-outline-success" href="../Scripts/Libro/Main.php?updateID=<?php echo $fila['ID'] ?>">
                        <i><img class="icono" src="../Recursos/Icons/Edit.svg"></i>
                    </a>
                    </div>
                    <div class="col-6 col-sm-4">
                        <img class="LibrosImg" src="data:image/jpeg;base64,
                        <?php echo base64_encode($fila['imagen']); ?>"/>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
