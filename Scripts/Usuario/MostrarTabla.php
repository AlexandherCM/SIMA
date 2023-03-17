<?php function MostrarTabla(){ ?>
    <?php
    $Query = "SELECT* FROM usuario";
    $conexion = new Modelo();

    $usuarios = mysqli_query($conexion->conectar(), $Query);

    while ($fila = mysqli_fetch_array($usuarios)) { ?>
        <tr>
            <td class="text-center">
                <?php echo $fila['ID'] ?>
            </td>
            <td> <?php echo $fila['Usuario'] ?> </td>
            <td> <?php echo $fila['Correo'] ?> </td>
            <td> <?php echo $fila['Contraseña'] ?> </td>
            <td class="d-flex justify-content-center grid gap-3">

                <a class="g-col-6 btn btn-outline-danger" href="../Scripts/Usuario/Main.php?deleteID=<?php echo $fila['ID'] ?>">
                    <i><img class="icono" src="../Recursos/Icons/Delete.svg"></img></i>
                </a>

                <a class="g-col-6 btn btn-outline-success" href="../Scripts/Usuario/Main.php?updateID=<?php echo $fila['ID'] ?>">
                    <i><img class="icono" src="../Recursos/Icons/Edit.svg"></i>
                </a>
            </td>
        </tr>
    <?php } ?>
<?php } ?>