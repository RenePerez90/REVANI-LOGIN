<h2>REVANIr</h2>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
crossorigin="anonymous">
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="php/registro_usuario_be.php" method="post">
			<link rel="stylesheet" href="style.css">
			<h1>Crear Cuenta</h1>
			<span>Puedes utilizar tu correo electrónico para registrarte</span>
			<input type="text" placeholder="Nombre" name="usuario"/>
			<input type="email" placeholder="Correo" name="correo"/>
			<input type="password" placeholder="Contraseña" name="contra"/>
			<input name="btnRegistro" class="btn btn-outline-dark" type="submit" value="Registrate">
			<!--<button name = "btnRegistro" type="submit" class="btn btn-outline-dark btn-sm">Registrate</button>-->
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="" method="post">
			<h1>Iniciar sesión</h1>
			<span>Usa tu correo electronico</span>
			<?php
			include('php/conexion_be.php');
			include('php/controlador_be.php');
			?>
			<input type="email" placeholder="Correo" name="correoingresar" />
			<input type="password" placeholder="Contraseña" name="contraingresar" />
			<a href="#">¿Olvidaste tu contraseña?</a>
			<!--<button name = "btnIngresar" type="submit" class="btn btn-outline-dark">Iniciar Sesión</button>-->
			<input name= "btnIngresar" class="btn btn-outline-dark" type="submit" value="Iniciar Sesión">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bienvenido!</h1>
				<p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
				<button class="btn btn-outline-light" id="signIn">Inicia Sesión</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>¿No tienes cuenta?</h1>
				<p>Introduce tus datos personales y comienza tu viaje con nosotros.</p>
				<button class="btn btn-outline-light" id="signUp">Regristate</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		<script src="Lokk.js"></script>
	</p>
</footer>