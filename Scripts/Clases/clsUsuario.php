<?php
class clsUsuario
{
    private $usuario;
    private $correo;
    private $contraseña;

    public function __construct($usuario = null, $correo = null, $contraseña = null)
    {
        $this->usuario    = $usuario;
        $this->correo     = $correo;
        $this->contraseña = $contraseña;
    }

    public function SubirUsuario($conexion)
    {
        $Query = "INSERT INTO usuario(Usuario, Correo, Contraseña) 
        VALUES ('$this->usuario', '$this->correo', '$this->contraseña')";

        $estado = mysqli_query($conexion, $Query);

        if (!$estado) {
            die("Ocurrio un error en el envio de datos");
        }

        $conexion->close();
        header("Location: http://localhost/php/SIMA/Index.php");
    }

    public function LoguearUsuario($conexion)
    {
        $estado = true;

        $Query = "SELECT* FROM usuario WHERE Correo = '$this->correo' AND  Contraseña = '$this->contraseña' ";
        $resultado = mysqli_query($conexion, $Query);

        $fila = mysqli_num_rows($resultado);
        if ($fila) {
            header("Location: http://localhost/php/SIMA/Vistas/Inicio.php");
        } else {
            $estado = false;
        }

        $conexion->close();
        // echo "<script>alert('$estado')</script>";
        return $estado;
    }

    public function BorrarUsuario($conexion, $id)
    {
        $Query = "DELETE FROM Usuario WHERE ID = $id";

        $resultado = mysqli_query($conexion->conectar(), $Query);

        if (!$resultado) {
            die("Operaqción fallida");
        }

        header("Location: http://localhost/php/SIMA/Index.php");
    }

    public function ActualizarUsuario($conexion, $id)
    {
        $Query = "UPDATE usuario SET Usuario = '$this->usuario', Correo = '$this->correo', Contraseña = '$this->contraseña' WHERE ID = '$id'";
        mysqli_query($conexion->conectar(), $Query);

        header("Location: http://localhost/php/SIMA/Index.php");
    }

    public function ObtenerRegistro($conexion, $id)
    {
        $Query = "SELECT* FROM usuario WHERE ID = $id";
        $resultado = mysqli_query($conexion->conectar(), $Query);

        if (mysqli_num_rows($resultado) == 1) {
            $fila = mysqli_fetch_array($resultado);
        }

        return $fila;
    }
}
