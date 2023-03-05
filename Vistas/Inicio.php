<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Header.php"); ?>
<?php include("../Scripts/Libro/SubirLibro.php"); ?>
<?php include("../Scripts/Libro/MostrarLibro.php"); ?>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Nav.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<div class="contenedor">
    <section class="icono-addLibro">
        <a>
            <img class="btn-visible" src="../Recursos/Icons/plus.svg" onclick="mostrarFormulario()">
        </a>
        <h3>Agregar Libro</h3>
    </section>

    <!-- <div class="bg-danger d-flex  flex-column  align-items-center"> -->
    <div class="bg-light formsLibro border bordered p-5">
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
                    <input type="number" name="precioUnit" required />
                </p>
                <p>
                    <label>Imagen</label>
                    <input type="file" name="imagen" required />
                </p>
                <div class="d-flex justify-content-center justify-content-between">
                    <input type="button" name="" value="Cancelar" onclick="mostrarBoton()" />
                    <input type="submit" name="SubirLibro" value="Guardar Libro" />
                </div>
            </fieldset>
        </form>
    </div>
    <div class="cartasLibro mt-4">
        <?php MostrarLibros(); ?>
    </div>
</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Footer.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->