<?php function MostrarLectores(){ ?>
    <?php
    $Query = "SELECT* FROM lector";
    $conexion = new Modelo();

    $lectores = mysqli_query($conexion->conectar(), $Query);

    while ($fila = mysqli_fetch_array($lectores)) { ?>
        <tr>
            <td class="text-center">
                <?php echo $fila['Matricula'] ?>
            </td>
            <td> <?php echo $fila['Nombre'] ?> </td>
            <td> <?php echo $fila['Direccion'] ?> </td>
            <td class="d-flex justify-content-center grid gap-3">

                <a class="g-col-6 btn btn-outline-danger" href="../Scripts/Lector/Main.php?deleteID=<?php echo $fila['Matricula'] ?>">
                    <i><img class="icono" src="../Recursos/Icons/Delete.svg"></img></i>
                </a>

                <a class="g-col-6 btn btn-outline-success" href="../Scripts/Lector/Main.php?updateID=<?php echo $fila['Matricula'] ?>">
                    <i><img class="icono" src="../Recursos/Icons/Edit.svg"></i>
                </a>
            </td>
        </tr>
    <?php } ?>
<?php } ?>