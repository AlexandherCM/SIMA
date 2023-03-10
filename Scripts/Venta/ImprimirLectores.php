<?php

function ImprimirLectores($conexion)
{
    $Query = "SELECT * FROM lector";
    $lectores = mysqli_query($conexion, $Query);

    while ($fila = mysqli_fetch_assoc($lectores)) { ?>
        <option value="<?php echo $fila['Matricula']; ?>"><?php echo $fila['Nombre']; ?></option><?php 
    } 
}
?>