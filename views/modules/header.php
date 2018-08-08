<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<a class="navbar-brand" href="inicio">
		<img src="assets/img/taladros.png" width="30" height="30" class="d-inline-block align-top" alt="">
		Bootstrap
		</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
	  </button>
  	<div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="inicio">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="usuarios">Usuarios</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="registro">Registro</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="logout">Logout</a>
	      </li>
	    </ul>
	    
	</div>
	<div class="sesion pr-4 pull-right">
    	<p class="usuario">Hola: <?php echo $_SESSION['nombre']; ?></p>
    </div>
</nav>