<?php
class clsVenta
{
    private $folio;
    private $libroID;
    private $lectorID;
    private $unidades;
    private $precioU;

    public function __construct($folioV = null, $lbrIDV = null, $lctIDV = null, $undsV = null, $prcUnit = null)
    {
        $this->folio             = $folioV;
        $this->libroID           = $lbrIDV;
        $this->lectorID          = $lctIDV;
        $this->unidades          = $undsV;
        $this->precioU           = $prcUnit;
    }

    public function SubirVenta($conexion)
    {
        $Query = "INSERT INTO venta (Folio, LibroID, LectorID, Unidades, PrecioUnit) 
            VALUES ('$this->folio', '$this->libroID', '$this->lectorID', '$this->unidades', '$this->precioU')";
        $estado = mysqli_query($conexion, $Query);

        if (!$estado) {
            die("Ocurrio un error en el envio de datos");
        }

        $conexion->close();
    }

    public function BorrarVentas($conexion)
    {
        $Query = "DELETE FROM venta";

        $estado = mysqli_query($conexion, $Query);

        if (!$estado) {
            die("Ocurrio un error en el envio de datos");
        }

        $conexion->close();
    }
}
