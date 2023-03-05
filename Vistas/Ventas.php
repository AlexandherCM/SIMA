<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Header.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Nav.php"); ?>

<?php include("../Scripts/Venta/ImprimirLibros.php"); ?>
<?php include("../Scripts/Venta/ImprimirLectores.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Scripts/Venta/VentaLibro.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<div class="box">

    <div class="formsVenta bg-light border bordered p-5">
        <form action="" name="signup-form" method="POST">
            <fieldset>
                <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
                <legend>Ventas</legend>
                <p>
                    <label>Libro</label>
                    <select class="form-select" name="nombreLibro" aria-label="Default select example" onchange="actualizar(this.value)">
                        <option class="opcion" selected disabled>Seleccione un libro</option>
                        <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
                        <?php ImprimirLibros($conexion->conectar());?>
                        <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
                    </select>
                </p>
                <p>
                    <label>Lector</label>
                    <select class="form-select" name="nombreLector" aria-label="Default select example">
                        <option class="opcion" selected disabled>Seleccione un lector</option>
                        <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
                         <?php ImprimirLectores($conexion->conectar()); ?>
                        <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
                    </select>
                </p>
                <p>
                    <label>Unidades</label>
                    <input type="number" min=0 name="unidades" placeholder="Unidades" required onchange="calcular(document.querySelector('[name=nombreLibro]').value, this.value)" />
                </p>
                <p>
                    <label>Precio por Unidad</label>
                    <input type="text" placeholder="$" name="precio" id="PrecioUnit" required>
                </p>
                <p>
                    <label>Total</label>
                    <input type="text" placeholder="$" type="text" name="totalV" id="totalV">
                </p>
                <div>
                    <input type="submit" name="SubirVenta" value="Realizar venta" />
                </div>
            </fieldset>
        </form>
    </div>
    
</div>
<script>
    function actualizar(libroId) {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            const precio = JSON.parse(this.responseText).precio;
            document.getElementById('PrecioUnit').value = precio;
        }
    };
    xhttp.open("GET", `../Scripts/Venta/consultas.php?libroId=${libroId}`, true);
    xhttp.send();
}

function calcular(libroId, unidades)
{
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            const precio = parseFloat(JSON.parse(this.responseText).precio);
            const total = precio * unidades; // Multiplica el precio por unidades
            document.getElementById('totalV').value = total;
        }
    };
    xhttp.open("GET", `../Scripts/Venta/consultas.php?libroId=${libroId}`, true);
    xhttp.send();
}
</script>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Footer.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->