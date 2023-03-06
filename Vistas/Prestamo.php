<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Header.php"); ?>

<?php include("../Scripts/Prestamo/ImprimirLibros.php"); ?>
<?php include("../Scripts/Prestamo/ImprimirLectores.php"); ?>
<?php include("../Scripts/Prestamo/MostrarPrestamos.php"); ?>

<?php include("../Scripts/Clases/Modelo.php"); 
$conexion = new Modelo();
?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Nav.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->

<div class="contenedor">
<section class="icono-addLibro">
        <a>
            <img class="btn-visible" src="../Recursos/Icons/plus.svg" onclick="mostrarFormularioLec()">
        </a>
        <h3>Agregar Lector</h3>
    </section>
    
<div class="bg-light formsLector border bordered p-5">
        <form action="../Scripts/Lector/SubirLector.php" name="signup-form" method="POST" enctype="multipart/form-data">
            <legend>Agregar Lector</legend>
            <fieldset>
                <div class="titulo-libro ">
                    <p>
                        <label>Matricula</label>
                        <input type="text" name="Matricula" required />
                    </p>
                </div>
                <p>
                    <label>Nombre</label>
                    <input type="text" name="Nombre" required />
                </p>
                <p>
                    <label>Dirección</label>
                    <input type="text" name="Direccion" required />
                </p>
                <div class="d-flex justify-content-center justify-content-between">
                    <br>
                    <input class="btn-savelector" type="submit" name="SubirLector" value="Guardar Libro" />
                    <br>
                    <input class="btn-lector" type="button" name="" value="Cancelar" onclick="mostrarBotonLec()" />
                </div>
            </fieldset>
        </form>
    </div>
    <div class="box-prestamo row cont-prest">
        <div class="formsPrestamo bg-light border bordered p-5 col-md-3">
            <form action="../Scripts/Prestamo/PrestamoLibro.php" name="signup-form" method="POST">
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
                        <input type="date" name="fechaPrestamo">
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