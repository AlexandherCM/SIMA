<?php

session_start();

class Modelo{
    private $host = "localhost";
    private $usuario = "root";
    private $contraseña = "";
    private $bd = "sima";

    public function conectar(){
        $conexion = mysqli_connect(
            $this->host, 
            $this->usuario, 
            $this->contraseña
        );
    
        $estado = mysqli_select_db($conexion, $this->bd);
    
        if (!$estado) {
            die("Ocurrio un error en la conexión de la base de datos");
        }
        echo'<h1>Base de datos conectada correctamente</h2>';
    
        return $conexion;
    } 
}
?>