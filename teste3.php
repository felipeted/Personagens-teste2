<?php
session_start();

$numero=$_SESSION['numero'];//recupera o numero de personagens
$pagina=$_SESSION['pagina'];//recupera a camada
$pagina++;//adiciona mais uma camada

include "numero.php";

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
		<?php
			switch ($numero) {
				case 1:
					per1();//informa os dados puxados do personagem 1
				break;
				
				case 2:
					per1();//informa os dados puxados do personagem 1
					per2();//informa os dados puxados do personagem 2
				break;

				case 3:
					per1();//informa os dados puxados do personagem 1
					per2();//informa os dados puxados do personagem 2
					per3();//informa os dados puxados do personagem 3
				break;

				case 4:
					per1();//informa os dados puxados do personagem 1
					per2();//informa os dados puxados do personagem 2
					per3();//informa os dados puxados do personagem 3
					per4();//informa os dados puxados do personagem 4
				break;
			}
		?>
	</div>
	<div class="form">
		<?php
			print_r($personagem1);//mostra o objeto
			echo "<br>";
			print_r($personagem2);//mostra o objeto
			echo "<br>";
			print_r($personagem3);//mostra o objeto
			echo "<br>";
			print_r($personagem4);//mostra o objeto
		?>
	</div>
</center>
</body>
</html>