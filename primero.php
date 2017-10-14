

<!DOCTYPE html>
 <html lang="en">
 <head>
 		<meta charset="UTF-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="web/bootstrap-3.3.5/css/bootstrap.min.css">
		<script src="web/bootstrap-3.3.5/js/bootstrap.min.js"></script>
		<script src="web/bootstrap-3.3.5/js/jquery-2.1.4.min.js"></script>
 		<title>Document</title>
 		<link rel="stylesheet" href="estilo_de_biblioteca.css">
 </head>
 <body>
<div class="container-fluid">

  <div class="row">
  	
		<form action="registro.php" method="GET">
			<div class="form-group">
				<label>Usuario</label>
				<input type="text" class="form-control" name="nusuario"  placeholder="usuario" >
			</div>

			<div class="form-group">
				<label>Correo</label>
				<input type="email" class="form-control" name="correo" placeholder="micorreo@hotmail.com">
			</div>

			<div class="form-group">
				<label>Clave</label>
				<input type="password" class="form-control" name="clave" placeholder="Contraseña">
			</div>

			<button type="submit" class="btn btn-primary btn-lg" value="enviar" name="anadir" >Enviar</button>
			<button type="reset" class="btn btn-primary">limpiar</button>
		</form>
					
  </div>
</div>
</body>
 
 </html>