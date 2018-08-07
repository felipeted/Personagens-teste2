<?php
	session_start();
	$pagina=1;//variável contendo a camada da página
	$_SESSION['pagina'] = $pagina;//sessão para atualizar a variável a cada nova camada
?>
<!DOCTYPE html>
<html>
<head>
	<title>Teste - Crud de Personagens</title>
	<style type="text/css">
		.form{
			border: 1px solid green;
			width: 400px;
			height: 200px;
		}

		.normal{
			margin-top: 10px;
		}

		.pequeno{
			margin-top: 10px;
			width: 50px;
		}
	</style>
</head>
<body>
<center>
	<div class="form">
		<form method="post" action="teste2.php">
			<fieldset>
				Número de personagens (No mínimo 4):
				<br>
				<input type="number" name="numero" class="pequeno">
				<input type="submit" name="ok">
			</fieldset>
		</form>
	</div>
</center>
</body>
</html>