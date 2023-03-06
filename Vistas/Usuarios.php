<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Header.php"); ?>
<?php include("../Recursos/Includes/Nav.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Scripts/Usuario/MostrarTabla.php"); ?>
<?php include("../Scripts/Clases/Modelo.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<div class="contenedor">
    <header>
        <h1>Usuarios</h1>
    </header>
    <section class = "bg-light">
        <div class="d-flex justify-content-cente mt-4">
            <table class="table table-bordered border border-3 border-dark-subtle">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Usuario
                        </th>
                        <th>
                            Correo
                        </th>
                        <th>
                            Contraseña
                        </th>
                        <th>
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php MostrarTabla(); ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->

</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Footer.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->