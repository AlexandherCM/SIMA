<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("Recursos/Includes/Header.php"); ?>
<?php include("Scripts/Usuario/IniciarSesion.php"); ?>
<?php include("Scripts/Usuario/MostrarTabla.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<div class="contenedor">
    <header>
        <h1>SIMA</h1>
    </header>

    <section class="formularioUno bg-light">
        <div class=" mt-4">
            <?php
            if (isset($_SESSION['mensaje'])) { ?>

                <div class="border border-1 alert alert-<?= $_SESSION['color']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['mensaje']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset();
            } ?>
            <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
            <form method="POST" action="" name="signup-form">
                <legend>Iniciar Sesión</legend>
                <fieldset>
                    <p>
                        <label>Correo</label>
                        <input type="email" name="Correo" required />
                    </p>
                    <p>
                        <label>Contraseña</label>
                        <input type="password" name="Contraseña" required />
                        <br>
                    </p>
                    <p>
                        <input type="submit" name="Loguear" value="Iniciar Sesión" />
                    </p>
                    <p>
                        <a href="Vistas/RegUsuario.php">Registrarse</a>
                    </p>
                </fieldset>
            </form>
        </div>
    </section>
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->

</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("Recursos/Includes/Footer.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->