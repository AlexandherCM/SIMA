<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Header.php"); ?>

<?php include("../Scripts/Prestamo/ImprimirLibros.php"); ?>
<?php include("../Scripts/Prestamo/ImprimirLectores.php"); ?>
<?php include("../Scripts/Prestamo/PrestamoLibro.php"); ?>
<?php include("../Scripts/Prestamo/MostrarPrestamos.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Nav.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->

<div class="contenedor">
    <div class="row cont-prest">
        <div class="formsPrestamo bg-light border bordered p-5 col-md-3">
            <form action="" name="signup-form" method="POST">
                <fieldset>
                    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
                    <legend>Prestamos</legend>
                    <p>
                        <label>Libro</label>
                        <select class="form-select" name="nombreLibro" aria-label="Default select example" onchange="actualizar(this.value)">
                            <option class="opcion" selected disabled>Seleccione un libro</option>
                            <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
                            <?php ImprimirLibros($conexion->conectar()); ?>
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
                        <label>Fecha</label>
                        <input type="date">
                    </p>
                    <div>
                        <input type="submit" name="SubirPrestamo" value="Realizar prestamo" />
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-md-9">
            <table class="table table-bordered border border-3 border-dark-subtle">
                <thead>
                    <tr>
                        <th>ID               </th>
                        <th>Lector           </th>
                        <th>Libro            </th>
                        <th>Fecha Prestamo   </th>
                        <th>Fecha Devolucion </th>
                        <th>Estatus          </th>
                    </tr>
                </thead>
                <tbody>
                    <?php MostrarPrestamos($conexion->conectar()); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Footer.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->