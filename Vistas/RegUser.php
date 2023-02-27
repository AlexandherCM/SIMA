<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Header.php"); ?>
<?php include("../Scripts/SubirUsuario.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<div class="contenedor">

  <header>
    <h1>SIMA</h1>
  </header>

  <div>
    <button class="btn-formulario">Miaw</button>
  </div>

  <div class="col-md-2 mt-4">
    <form class="formularioUno" action="" method="POST" name="signup-form">
      <!-- ../Scripts/main.php -->
      <fieldset>
        <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
        <legend>Registrar Usuario</legend>
        <p>
          <label>Usuario</label>
          <input type="text" name="Usuario" required />
        </p>

        <p>
          <label>Correo</label>
          <input type="email" name="Correo" required />
        </p>

        <p>
          <label>Contraseña</label>
          <input type="password" name="Contraseña" required />
        </p>

        <p>
          <input type="submit" name="SubirUsuario" value="Subir">
          <a href="../index.php">Iniciar Sesión</a>
        </p>
        <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
      </fieldset>
    </form>


  </div>

</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->
<?php include("../Recursos/Includes/Footer.php"); ?>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - --->