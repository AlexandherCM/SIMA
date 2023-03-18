<?php function MostrarVentas($conexion)
{ ?>
    <?php
    $Query = "SELECT * FROM venta";
    $ventas = mysqli_query($conexion, $Query);

    while ($fila = mysqli_fetch_array($ventas)) { ?>
        <tr>
            <td class="text-center"><?php echo $fila['Folio'] ?></td>
            <td><?php
                $Query = "SELECT Titulo FROM libro WHERE ID=" . $fila['LibroID'];
                $libro = mysqli_query($conexion, $Query);
                $libro_row = mysqli_fetch_array($libro);
                echo $libro_row['Titulo'];
                ?>
            </td>
            <td>
                <?php
                $Query = "SELECT Nombre FROM lector WHERE Matricula=" . $fila['LectorID'];
                $lector = mysqli_query($conexion, $Query);
                $lector_row = mysqli_fetch_array($lector);
                echo $lector_row['Nombre'];
                ?></td>
            <td class="text-center">
                <?php echo $fila['Unidades'] ?>
            </td>
            <td class="text-center">
                <?php echo $fila['PrecioUnit'] ?>
            </td>
            <td class="text-center">
                <?php echo "$" . $fila['Total'] ?>
            </td>
        </tr>
    <?php } ?>
<?php } ?>

<?php
function obtenerTotalVentas($conexion)
{
    if ($conexion->connect_error) {
        die('Error de conexión: ' . $conexion->connect_error);
    }

    $query = "SELECT SUM(Total) as totalVentas FROM venta";

    $resultado = $conexion->query($query);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $total = $fila['totalVentas'];
    } else {
        $total = 0;
    }

    $conexion->close();

    return $total;
}
?>