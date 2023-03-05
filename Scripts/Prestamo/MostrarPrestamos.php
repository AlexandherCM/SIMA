<?php function MostrarPrestamos($conexion)
{ ?>
    <?php
    $Query = "SELECT * FROM prestamo";
    $usuarios = mysqli_query($conexion, $Query);

    while ($fila = mysqli_fetch_array($usuarios)) { ?>
        <tr>
            <td class="text-center"><?php echo $fila['ID'] ?></td>
            <td><?php
                $Query = "SELECT Nombre FROM lector WHERE Matricula=" . $fila['LectorID'];
                $lector = mysqli_query($conexion, $Query);
                $lector_row = mysqli_fetch_array($lector);
                echo $lector_row['Nombre'];
                ?>
            </td>
            <td>
                <?php
                $Query = "SELECT Titulo FROM libro WHERE ID=" . $fila['LibroID'];
                $libro = mysqli_query($conexion, $Query);
                $libro_row = mysqli_fetch_array($libro);
                echo $libro_row['Titulo'];
                ?></td>
            <td><?php echo $fila['FechaPrestamo'] ?></td>
            <td><?php echo $fila['FechaDevolucion'] ?></td>
            <?php
            if ($fila['Devolucion'] == false) { ?>
                <td class="d-flex justify-content-center grid gap-3">
                    <a class="g-col-6 btn btn-outline-danger" href="../Scripts/Prestamo/ActualizarPrestamo.php?updateID=' . $fila['ID'] . '">
                        <i>Entregar</i>
                    </a>
                </td>
            <?php } else { ?>
                <td>Finalizado</td>
            <?php } ?>
        </tr>
    <?php } ?>
<?php } ?>