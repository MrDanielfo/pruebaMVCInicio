<div class="container my-5">

  <h2 class="text-dark text-center">Registro de Usuarios</h2>
  
  <form class="p-2" method="POST">

      <div class="form-group"> 
        <label for="nombreRegistro">Nombre</label>
        <input type="text" class="form-control" id="nombreRegistro" name="nombreRegistro">   
      </div>

      <div class="form-group"> 
        <label for="emailRegistro">E-mail</label>
        <input type="text" class="form-control" id="emailRegistro" name="emailRegistro">   
      </div>


      <div class="form-group"> 
        <label for="nUsuarioRegistro">Usuario</label>
        <input type="text" class="form-control" id="nUsuarioRegistro" name="nUsuarioRegistro">   
      </div>

      <div class="form-group">
        <label for="passRegistro">Password</label>
        <input type="password" class="form-control" id="passRegistro" name="passRegistro">
      </div>

      <button type="submit" class="btn btn-primary">Registrar</button>

      <?php

        $registroUsuario = new UsuariosController();
        $registroUsuario->registroUsuario();


      ?>
  </form>

</div>