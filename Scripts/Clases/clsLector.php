<?php
class clsLector
{
    private $matricula;
    private $nombre;
    private $direccion;

    public function __construct($mat = null, $nom = null, $dir = null)
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

    public function BorrarLector($conexion, $id)
    {
        $Query = "DELETE FROM lector WHERE Matricula = $id";

        $resultado = mysqli_query($conexion->conectar(), $Query);

        if (!$resultado) {
            die("Operaqción fallida");
        }

        header("Location: http://localhost/php/SIMA/Vistas/Lectores.php");
    }

    public function ObtenerRegistro($conexion, $id)
    {
        $Query = "SELECT* FROM lector WHERE Matricula = $id";
        $resultado = mysqli_query($conexion->conectar(), $Query);

        if (mysqli_num_rows($resultado) == 1) {
            $fila = mysqli_fetch_array($resultado);
        }

        return $fila;
    }

    public function ActualizarLector($conexion, $id)
    {
        $Query = "UPDATE lector SET Matricula = '$this->matricula', Nombre = '$this->nombre', Direccion = '$this->direccion' WHERE Matricula = '$id'";
        mysqli_query($conexion->conectar(), $Query);

        header("Location: http://localhost/php/SIMA/Vistas/Lectores.php");
    }
}
?>