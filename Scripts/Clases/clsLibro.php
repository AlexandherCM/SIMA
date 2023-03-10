<?php
class clsLibro
{
    private $categoria;
    private $titulo;
    private $edicion;
    private $editorial;
    private $autor;
    private $fechaPublicacion;
    private $unidades;
    private $precioUnit;
    private $imagen;

    public function __construct($cat = null, $tit = null, $edic = null, $edit = null, $aut = null, $fPub = null, $uni = null, $pUni = null, $img = null)
    {
        $this->categoria         = $cat;
        $this->titulo            = $tit;
        $this->edicion           = $edic;
        $this->editorial         = $edit;
        $this->autor             = $aut;
        $this->fechaPublicacion  = $fPub;
        $this->unidades          = $uni;
        $this->precioUnit        = $pUni;
        $this->imagen            = $img;
    }

    public function SubirLibro($conexion)
    {
        // Capturando y convirtiendo imagen - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
        $cont_img = file_get_contents($this->imagen);
        $cont_img = mysqli_real_escape_string($conexion, $cont_img);
        // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

        $Query = "INSERT INTO libro (CategoriaID, Titulo, Edicion, Editorial, Autor, FechaPublicacion, Unidades, PrecioUnit, Imagen) 
        VALUES ('$this->categoria', '$this->titulo', '$this->edicion', '$this->editorial', '$this->autor', '$this->fechaPublicacion', '$this->unidades', '$this->precioUnit','$cont_img')";

        $estado = mysqli_query($conexion, $Query);

        if (!$estado) {
            die("Ocurrio un error en el envio de datos");
        }

        $conexion->close();
    }
    public function ActualizarLibro($conexion, $id)
    {
        $Query = "UPDATE libro SET Titulo = '$this->titulo', Edicion = '$this->edicion', Editorial = '$this->editorial', Autor = '$this->autor', Unidades = '$this->unidades', PrecioUnit = '$this->precioUnit' WHERE ID = '$id'";

        mysqli_query($conexion->conectar(), $Query);

        header("Location: http://localhost/php/SIMA/Vistas/Inicio.php");
    }

    public function EliminarLibro($conexion, $ID)
    {
        $Query = "DELETE FROM libro WHERE id = $ID";

        if (mysqli_query($conexion->conectar(), $Query)) {
            echo "El libro se ha eliminado correctamente";
        } else {
            echo "Error al eliminar el libro: " . mysqli_error($conexion);
        }
        
        header("Location: http://localhost/php/SIMA/Vistas/Inicio.php");
    }
    
    public function ObtenerRegistro($conexion, $id)
    {
        $Query = "SELECT* FROM libro WHERE ID = $id";
        $resultado = mysqli_query($conexion->conectar(), $Query);

        if (mysqli_num_rows($resultado) == 1) {
            $fila = mysqli_fetch_array($resultado);
        }

        return $fila;
    }
}
