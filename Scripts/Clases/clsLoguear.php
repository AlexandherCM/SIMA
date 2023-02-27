<?php
class clsLoguear{
    private $Correo;
    private $Contraseña;

    public function __construct($Correo,$Contraseña)
    {
        $this->Correo = $Correo;
        $this->Contraseña = $Contraseña;
    }

    public function LoguearUsuario($conexion){
        $estado = true;

        $Query = "SELECT* FROM usuario WHERE Correo = '$this->Correo' AND  Contraseña = '$this->Contraseña' ";
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
}



?>