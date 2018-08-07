<?php
session_start();

$numero=$_POST['numero'];//numero de personagens
(($numero>1)||($numero>4))?$numero=1:$numero=$numero;//se ele for menor que 1 ou maior que 4 recebe 1
$_SESSION['numero'] = $numero;//o numero vai pra sessão
$pagina=$_SESSION['pagina'];//recupero a camada da página
$pagina++;//adiciono mais uma camada
$_SESSION['pagina'] = $pagina;//devolvo a sessão

include "numero.php";//onde estão as funções de tabela por numero de personagens

?>
<!DOCTYPE html>
<html>
<head>
	<title>Teste - Crud de Personagens</title>
	<style type="text/css">
		.form{
			border: 1px solid green;
			width: 400px;
		}

		.normal{
			margin-top: 10px;
			color: gray;
		}

		.pequeno{
			margin-top: 10px;
			width: 50px;
			color: gray;
		}
	</style>
</head>
<body>
<center>
	<div class="form">
		<form method="post" action="teste3.php">
			<?php
				switch ($numero) {
					case 1:
						per1();
					break;
					
					case 2:
						per1();
						per2();
					break;

					case 3:
						per1();
						per2();
						per3();
					break;

					case 4:
						per1();
						per2();
						per3();
						per4();
					break;
				}
			?>
			<br><br>
			<input type="submit" name="ok">
		</form>
	</div>
</center>
</body>
</html>