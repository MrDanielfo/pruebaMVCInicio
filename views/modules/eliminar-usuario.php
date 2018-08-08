
<div class="container my-5">

  <h2 class="text-dark text-center">Eliminar Usuario</h2>

  <?php

    $eliminado = new UsuariosController();
    $eliminado->eliminarUsuario();


  ?>

  <script>

    window.location = "usuarios"
  </script>

</div>