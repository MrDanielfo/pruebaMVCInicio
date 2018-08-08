

	$('.btnEditarUsuario').on('click', function() {

		var idUsuario = $(this).attr("idUsuario");

		console.log(idUsuario);

		var datos = new FormData();

		datos.append('idUsuario', idUsuario);

		
		$.ajax({
			url: "ajax/usuarios-ajax.php",
			method: "POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			dataType: "json",
			success: function(response) {
				console.log(response);
				$('#idUsuario').val(response['id'])
				$('#editarNombre').val(response['nombre'])
				$('#editarEmail').val(response['email'])
				$('#editarNomUsuario').val(response['n_usuario'])
			}
		})
		
	})

	$('.btnEliminarUsuario').on('click', function() {

		var idUsuario = $(this).attr('idUsuario');

		window.location = 'index.php?ruta=eliminar-usuario&idUsuario='+idUsuario 


	})




	
