<?php 
class clsUsuario{
    private $usuario;
    private $correo;
    private $contraseña;

    public function __construct($usuario = null, $correo, $contraseña)
    {
        $this->usuario      = $usuario;
        $this->correo    = $correo;
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

    public function LoguearUsuario($conexion){
        $estado = true;

        $Query = "SELECT* FROM usuario WHERE Correo = '$this->correo' AND  Contraseña = '$this->contraseña' ";
        $resultado = mysqli_query($conexion, $Query);

        $fila = mysqli_num_rows($resultado);
        if($fila){
            header("Location: http://localhost/php/SIMA/Vistas/Inicio.php");
        }else{
            $estado = false;
        }

        $conexion->close();
        // echo "<script>alert('$estado')</script>";
        return $estado;
    }

    public function BorrarUsuario($conexion){

    }
    public function ActualizarUsuario($conexion){
        
    }
}





?>