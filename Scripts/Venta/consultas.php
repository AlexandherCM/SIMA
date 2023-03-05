<?php

$libroId = $_GET['libroId'];
$conexion = mysqli_connect("localhost", "root", "", "sima");

// Obtener el precio del libro correspondiente al ID
$sql = "SELECT PrecioUnit FROM libro WHERE ID = $libroId";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);
$precio = $fila['PrecioUnit'];
echo json_encode(array('precio' => $precio));
