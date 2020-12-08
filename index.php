<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php require_once "scripts.php"; ?>
</head>
<body style="background-image: url(img/fondo4.jpg); width: 100%; height: 100vh; background-size: cover;">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-info">
				<div class="panel panel-heading" style="text-align: center;">Logeo y Registro de Usuarios</div>
				<div class="panel panel-body">
					<div style="text-align: center;">
						<img src="img/avatar.png" height="250">
					</div>
					<p></p>
					<label>Usuario</label>
					<input type="text" id="usuario" class="form-control input-sm" name="">
					<label>Password</label>
					<input type="password" id="password" class="form-control input-sm" name="">
					<p></p>
					<span class="btn btn-danger" id="entrarSistema">Entrar</span>
					<a href="registro.php" class="btn btn-success">Registrar</a>	
				</div>
			</div>
		</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/login.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="inicio.php";
							}else{
								alertify.alert("Fallo al entrar :(");
							}
						}
					});
		});	
	});
</script>