<?php

function ImprimirLibros($conexion)
{
    $Query = "SELECT * FROM libro WHERE Unidades > 0";
    $libros = mysqli_query($conexion, $Query);

    while ($fila = mysqli_fetch_assoc($libros)) { ?>
        <option value="<?php echo $fila['ID']; ?>"><?php echo $fila['Unidades'] . ' - ' . $fila['Titulo']; ?></option><?php
    }
} 

?>