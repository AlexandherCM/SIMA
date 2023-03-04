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

    public function __construct($cat, $tit, $edic, $edit, $aut, $fPub, $uni, $pUni, $img)
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

        $Query = "INSERT INTO libro (CategoriaID, Titulo, Edicion, Editorial, Autor, FechaPublicacion, Unidades, PrecioUnit, imagen) 
        VALUES ('$this->categoria', '$this->titulo', '$this->edicion', '$this->editorial', '$this->autor', '$this->fechaPublicacion', '$this->unidades', '$this->precioUnit','$cont_img')";

        $estado = mysqli_query($conexion, $Query);

        if (!$estado) {
            die("Ocurrio un error en el envio de datos");
        }

        $conexion->close();
    }

    public function MostrarLibro($conexion)
    {
        $Query = "SELECT* FROM libro";
        $libros = mysqli_query($conexion->conectar(), $Query);


        $resultado = mysqli_query($conexion, $Query);

        if (mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_assoc($resultado);
            $contenido_imagen = $fila['Imagen'];

            header('Content-Type: image/jpeg');
            echo $contenido_imagen;
        } else {
            echo "No se encontró la imagen.";
        }
    }

    public function ActualizarLibro($conexion)
    {
        $Query = "UPDATE libro SET Categoria = '$this->categoria', Titulo = '$this->titulo', Edicion = '$this->edicion', Editorial = '$this->editorial', Autor = '$this->autor', FechaPublicacion = '$this->fechaPublicacion', Unidades = '$this->unidades', PrecioUnit = '$this->precioUnit'";

        if (mysqli_query($conexion, $Query)) {
            echo "El libro se ha actualizado correctamente";
        } else {
            echo "Error al actualizar el libro: " . mysqli_error($conexion);
        }
        $conexion->close();
    }

    public function EliminarLibro($conexion, $ID)
    {
        $Query = "DELETE FROM libro WHERE id = $ID";

        if (mysqli_query($conexion, $Query)) {
            echo "El libro se ha eliminado correctamente";
        } else {
            echo "Error al eliminar el libro: " . mysqli_error($conexion);
        }

        $conexion->close();
    }
}
