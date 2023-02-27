<?php
class clsSubirUsuario
{
    private $Usu;
    private $Email;
    private $Password;

    public function __construct($usuario, $correo, $contraseña)
    {
        $this->Usu = $usuario;
        $this->Email = $correo;
        $this->Password = $contraseña;
    }

    public function SubirUsuario($conexion)
    {
        // echo '<script>alert("Usuario:'.$this->Usu.'\nCorreo: '.$this->Email.' \nContraseña: '.$this->Password.'")</script>';
        $Query = "INSERT INTO usuario(Usuario, Correo, Contraseña) VALUES ('$this->Usu', '$this->Email', '$this->Password')";
        $estado = mysqli_query($conexion, $Query);

        if (!$estado) {
            die("Ocurrio un error en el envio de datos");
        }

        $conexion->close();

        header("Location: http://localhost/php/SIMA/Index.php");
    }
}
