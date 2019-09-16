<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:index.php?action=ingresar");

	exit();

}

?>


<h1>REGISTRO DE USUARIO</h1>

<form method="POST">
	
	<input type="text" placeholder="Usuario" name="usuarioRegistro" required>

	<input type="password" placeholder="Contraseña" name="passwordRegistro" required>

	<input type="email" placeholder="Email" name="emailRegistro" required>

	<input type="text" placeholder="Nombre" name="nombreRegistro" required>

	<input type="text" placeholder="Apellido Paterno" name="paternoRegistro"  required>

	<input type="text" placeholder="Apellido Materno" name="maternoRegistro"  required>

	<input type="submit" value="Enviar">

</form>

<?php

$registro = new MvcController();
$registro -> registroUsuarioController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}else{
		echo "Registro Fallido";
	}

}

?>
