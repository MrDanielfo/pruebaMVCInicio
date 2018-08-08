<div class="container-fluid my-3">
	
	<table class="table table-responsive-md py-3">
	  	<thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">E-Mail</th>
		      <th scope="col">Usuario</th>
		      <th scope="col">Password</th>
		      <th scope="col">Editar</th>
		      <th scope="col">Eliminar</th>
		    </tr>
	    </thead>
	    <?php

	    	$usuarios = UsuariosController::mostrarUsuarios();
	    	foreach($usuarios as $key => $item) {

	echo '	<tbody>
			    <tr>
			      <th scope="row">'. ($key + 1)  .'</th>
			      <td>'. $item['nombre']  .'</td>
			      <td>'. $item['email']  .'</td>
			      <td>'. $item['n_usuario']  .'</td>
			      <td>'. $item['pass']  .'</td>
			      <td><button data-toggle="modal"  data-target="#editar-modal" idUsuario="'. $item['id'] .'" class="btn btn-warning btnEditarUsuario">Editar</button></td>
			      <td><button idUsuario="'. $item['id'] .'" class="btn btn-danger btnEliminarUsuario">Eliminar</button></td>
			    </tr>
			</tbody>'; 
	    	}

    	
	    ?>
  		
	</table>
	
	<div class="modal fade" id="editar-modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>  
      			</div>
			    <div class="modal-body">
			        <form class="p-2" method="POST">

				      <div class="form-group"> 
				        <label for="editarNombre">Nombre</label>
				        <input type="text" class="form-control" id="editarNombre" name="editarNombre" value="">
				        <input type="hidden" id="idUsuario" name="idUsuario" value="">     
				      </div>

				      <div class="form-group"> 
				        <label for="editarEmail">E-mail</label>
				        <input type="text" class="form-control" id="editarEmail" name="editarEmail" value="">   
				      </div>


				      <div class="form-group"> 
				        <label for="editarNomUsuario">Usuario</label>
				        <input type="text" class="form-control" id="editarNomUsuario" name="editarNomUsuario" value="">   
				      </div>

				      <div class="form-group">
				        <label for="editarPass">Password</label>
				        <input type="password" class="form-control" id="editarPass" name="editarPass" value="">
				      </div>

      				  <button type="submit" class="btn btn-primary">Editar</button>

				      <?php

				        $editarUsuario = new UsuariosController();
				        $editarUsuario->editarUsuario();


				      ?>
  					</form>
			    </div>
		        <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        </div>
    		</div>
		</div>
	</div>
	



</div>