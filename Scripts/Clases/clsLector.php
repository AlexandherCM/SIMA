<?php
class clsLector
{
    private $matricula;
    private $nombre;
    private $direccion;

    public function __construct($mat, $nom, $dir)
    {
        $this->matricula         = $mat;
        $this->nombre            = $nom;
        $this->direccion         = $dir;
    }

    public function SubirLector($conexion)
    {
        $Query = "INSERT INTO lector (Matricula, Nombre, Direccion) 
        VALUES ('$this->matricula', '$this->nombre', '$this->direccion')";

        $estado = mysqli_query($conexion, $Query);

        if (!$estado) {
            die("Ocurrio un error en el envio de datos");
        }

        $conexion->close();
    }
}
?>