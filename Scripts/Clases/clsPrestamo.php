<?php
class clsPrestamo
{
    private $Lector;
    private $Libro;
    private $FechaPrestamo;

    public function __construct($lec = null, $lib = null, $fechP = null, $fechD = null)
    {
        $this->Lector           = $lec;
        $this->Libro            = $lib;
        $this->FechaPrestamo    = $fechP;
    }

    public function SubirPrestamo($conexion)
    {
        $Query = "INSERT INTO prestamo (LectorID, LibroID, FechaPrestamo) 
        VALUES ('$this->Lector', '$this->Libro', '$this->FechaPrestamo') ";

        $estado = mysqli_query($conexion, $Query);

        if (!$estado) {
            die("Ocurrio un error en el envio de datos");
        }
        $_SESSION['mensaje'] = 'Registro guardado con exito con éxito!';
        $_SESSION['color'] = 'success';
        $conexion->close();
    }

    public function BorrarPrestamo($conexion, $id)
    {
        $Query = "DELETE FROM prestamo WHERE ID = '$id'";
        mysqli_query($conexion->conectar(), $Query);
    }

    public function ObtenerRegistro($conexion, $id)
    {
        $Query = "SELECT* FROM prestamo WHERE ID = $id";
        $resultado = mysqli_query($conexion->conectar(), $Query);

        if (mysqli_num_rows($resultado) == 1) {
            $fila = mysqli_fetch_array($resultado);
        }

        return $fila;
    }
}
