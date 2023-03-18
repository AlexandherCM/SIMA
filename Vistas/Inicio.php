<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Header.php"); ?>
<?php include("../Scripts/Libro/SubirLibro.php"); ?>
<?php include("../Scripts/Libro/MostrarLibro.php"); ?>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Nav.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<div class="contenedor">
    <div class="container d-flex justify-content-center align-items-center">
        <?php
        if (isset($_COOKIE['usuarioActivo']) && isset($_COOKIE['color'])) {
        ?>
            <div class="border border-1 alert alert-<?=$_COOKIE['color'];?> alert-dismissible fade show" role="alert">
                <h2><?= $_COOKIE['usuarioActivo']; ?></h2>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
            // Eliminar las cookies después de mostrar la alerta
            setcookie('usuarioActivo', '', time() - 10, '/');
            setcookie('color', '', time() - 10, '/');
        }
        ?>
    </div>

    <section class="icono-addLibro">
        <a>
            <img class="btn-visible" src="../Recursos/Icons/plus.svg" onclick="mostrarFormulario()">
        </a>
        <h3>Agregar Libro</h3>
    </section>
    <!-- inicio -->
    <!-- <div class="bg-danger d-flex  flex-column  align-items-center"> -->
    <div class="formsLibro bg-light border bordered p-4">
        <form action="" name="signup-form" method="POST" enctype="multipart/form-data">
            <legend>Agregar libro</legend>
            <fieldset>
                <div class="titulo-libro ">
                    <p>
                        <label>Titulo</label>
                        <input type="text" name="titulo" required />
                    </p>
                </div>
                <p>
                    <label>Edicion</label>
                    <input type="text" name="edicion" required />
                </p>
                <p>
                    <label>Editorial</label>
                    <input type="text" name="editorial" required />
                </p>
                <p>
                    <label>Autor</label>
                    <input type="text" name="autor" required />
                </p>
                <p>
                    <label>Categoria</label>
                    <select name="categoria" class="" id="" required>
                        <option class="" selected disabled value="">Categoria</option>
                        <option class="" value="1">Historia</option>
                        <option class="" value="2">Juvenil</option>
                        <option class="" value="3">Literatura contemporánea</option>
                        <option class="" value="4">Terror</option>
                    </select>
                </p>
                <p>
                    <label>Fecha de publicación</label>
                    <input type="date" name="fechaPublicacion" required />
                </p>
                <p>
                    <label>Unidades</label>
                    <input type="number" name="unidades" required />
                </p>
                <p>
                    <label>Precio Unitario</label>
                    <input  type="number" step="0.01" name="precioUnit" required />
                </p>
                <p>
                    <label>Imagen</label>
                    <input type="file" name="imagen" required />
                </p>
                <div class="">
                    <input type="submit" name="SubirLibro" value="Guardar Libro" />
                    <br>
                    <input type="button" name="" value="Cancelar" onclick="mostrarBoton()" />
                </div>
            </fieldset>
        </form>
    </div>

    <!-- fin -->
    <div class="cartasLibro mt-4">
        <?php MostrarLibros(); ?>
    </div>
</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Footer.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->