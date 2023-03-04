<?php
function MostrarLibros()
{
    $Query = "SELECT * FROM libro";
    $conexion = new Modelo();

    $libros = mysqli_query($conexion->conectar(), $Query);

    while ($fila = mysqli_fetch_array($libros)) {
        ?>
        <tr>
            <td>
                <img class="LibrosImg" src="data:image/jpeg;base64,
                <?php echo base64_encode($fila['imagen']); ?>"/>
            </td>
            <td><?php echo $fila['CategoriaID']      ?></td>
            <td><?php echo $fila['Titulo']           ?></td>
            <td><?php echo $fila['Edicion']          ?></td>
            <td><?php echo $fila['Editorial']        ?></td>
            <td><?php echo $fila['Autor']            ?></td>
            <td><?php echo $fila['FechaPublicacion'] ?></td>
            <td><?php echo $fila['Unidades']         ?></td>
            <td><?php echo $fila['PrecioUnit']       ?></td>
        </tr>
        <?php
    }
}
?>
