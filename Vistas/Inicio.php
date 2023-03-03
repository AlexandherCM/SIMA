<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Header.php"); ?>
<?php include("../Scripts/Libro/SubirLibro.php"); ?>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Nav.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<div class="contenedor">

    <header class="principal">
        <h2>LIBROS</h2>
    </header>

    <section class="d-flex justify-content-center mb-4">
        <a>
            <img class="btn-visible" src="../Recursos/Icons/plus.svg" onclick="mostrarFormulario()">
        </a>
    </section>

    <div class="formsLibro border bordered p-5">
        <form action="" name="signup-form" method="POST" enctype="multipart/form-data">
            <legend>Agregar libro</legend>
            <fieldset>
                <p>
                    <label>Titulo</label>
                    <input type="text" name="titulo" required />
                </p>
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
                    <input type="text" name="unidades" required />
                </p>
                <p>
                    <label>Precio Unitario</label>
                    <input type="text" name="precioUnit" required />
                </p>
                <!-- <p>
                    <label>Imagen</label>
                    <input type="file" name="imagen" required />
                </p> -->
                <div class="d-flex justify-content-center justify-content-between">
                    <input type="button" name="" value="Cancelar" onclick="mostrarBoton()"/>
                    <input type="submit" name="SubirLibro" value="Guardar Libro" />
                </div>
            </fieldset>
        </form>
    </div>
</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Footer.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->