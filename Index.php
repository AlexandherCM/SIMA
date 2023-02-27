<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("Recursos/Includes/Header.php"); ?>
<?php include("Scripts/IniciarSesion.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->

<div class="contenedor">
    <header>
        <h1>SIMA</h1>
    </header>

    <section class="row">
        <div class="col-md-3 mt-4">
            <?php if (isset($_SESSION['mensaje'])) { ?>

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
                    </p>
                    <p>
                        <input type="submit" name="Loguear" value="Iniciar Sesión" />
                    </p>
                    <p>
                        <a href="Vistas/RegUser.php">Registrarse</a>
                    </p>
                </fieldset>
            </form>
        </div>
        <div class="col-md-6 mt-4">
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
                    </tr>
                </thead>
                <tbody>
                <?php
                    $Query = "SELECT* FROM usuario";
                    $conn = mysqli_connect(
                        'localhost', 
                        'root', 
                        '', 
                        'libreria'
                    );
                    $usuarios = mysqli_query($conn,$Query);
                    
                    while($fila = mysqli_fetch_array($usuarios)){ ?>
                        <tr>
                            <td class="text-center"> <?php echo $fila['ID'] ?> </td>
                            <td> <?php echo $fila['Usuario'] ?> </td>
                            <td> <?php echo $fila['Correo'] ?> </td>
                            <td> <?php echo $fila['Contraseña'] ?> </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->

</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("Recursos/Includes/Footer.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->