
<div class="container mt-5 mb-5">

  <h2 class="text-dark text-center">Inicia Sesión para entrar a la aplicación</h2>
  
  <form class="p-4" method="POST">
      <div class="form-group">
        <label for="nombreUsuario">Nombre de Usuario</label>
        <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Nombre de Usuario">
        
      </div>
      <div class="form-group">
        <label for="passUsuario">Password</label>
        <input type="password" class="form-control" id="passUsuario" name="passUsuario" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-success">Inciar Sesión</button>

      <?php

        $inicioSesion = new UsuariosController();
        $inicioSesion->inicioSesion();


      ?>
  </form>

</div>

