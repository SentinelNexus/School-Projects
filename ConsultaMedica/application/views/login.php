<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Iniciar sesion </title>
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url('css/log.css')); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body style="background-color: honeydew;">
    <div class="container">
		<div class="row m-5 no-gutters shadow-lg">
			<div class="col-md-6 d-none d-md-block">
			<img src="<?php echo(base_url('imagenes/resonancia.jpg')); ?>" width="550px" height="600px">
			</div>
			<div class="col-md-6 bg.white p-5">
				<center>
					<h3 class="pb-3"> Inicio de sesión</h3>
				</center>
				<div class="form-style">
					<form action="<?php echo(site_url('login_controller/validacion')); ?>" id="form" method="POST">
						<div class="form-group pb-3">
							<input type="email" name="correoelectronico" placeholder="Correo electroncico" class="form-control" id="email">
						</div>
						<div class="form-group pb-3">
							<input type="password" name="contrasena" placeholder="Contraseña" class="form-control" id="password">
						</div>
						<div class="d-flex align-items-center justify-content-between">
							<div class="d-flex aling-items-center"><input type="checkbox"><span class="pl-2 font-weight-bold">Recuérdame</span></div>
							<div><a href="#">¿Olvido la contrasña?</a></div>
						</div>
						<div class="pb-2">
							<button type="submit" value="Send" class="btn-primary w-100 fotn-weight-bold mt-2">Enviar</button>
						</div>
					</form>
					<div class="pt-4 text-center">
						Registrese con sus datos exactos. <a href="<?php echo(site_url('Home_controller/registrarse')); ?>">Registrarse</a>
					</div>
					<div class="message" id="message"></div>
					<?php 
                  if (isset($msg)){
                     echo "<p class='mb-3'>".$msg."</p>";     
                  }
              ?>
				</div>
			</div>
		</div>
	</div>

</body>
</html>