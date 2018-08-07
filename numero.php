<?php
@session_start();//session para ele reconhecer as funções e @ para não der erro e informar que a sessão já foi iniciada

if ($pagina==2) {//se estiver na camada 2 ele fará a relação tabela número de personagens
	function Per1(){
		echo "<h1>Personagem 1</h1>";
		echo "Nome :".'<input type="text" name="nome1" class="normal" value="nome 1"><br>'."Poder :".'<input type="text" name="poder1" class="normal" value="poder 1"><br>'."Força :".'<input type="number" name="forca1" class="pequeno" value="0"><br>'."Defesa :".'<input type="number" name="defesa1" class="pequeno" value="0"><br>';
	}

	function Per2(){
		echo "<h1>Personagem 2</h1>";
		echo "Nome :".'<input type="text" name="nome2" class="normal" value="nome 2"><br>'."Poder :".'<input type="text" name="poder2" class="normal" value="poder 2"><br>'."Força :".'<input type="number" name="forca2" class="pequeno" value="0"><br>'."Defesa :".'<input type="number" name="defesa2" class="pequeno" value="0"><br>';
	}

	function Per3(){
		echo "<h1>Personagem 3</h1>";
		echo "Nome :".'<input type="text" name="nome3" class="normal" value="nome 3"><br>'."Poder :".'<input type="text" name="poder3" class="normal" value="poder 3"><br>'."Força :".'<input type="number" name="forca3" class="pequeno" value="0"><br>'."Defesa :".'<input type="number" name="defesa3" class="pequeno" value="0"><br>';
	}

	function Per4(){
		echo "<h1>Personagem 4</h1>";
		echo "Nome :".'<input type="text" name="nome4" class="normal" value="nome 4"><br>'."Poder :".'<input type="text" name="poder4" class="normal" value="poder 4"><br>'."Força :".'<input type="number" name="forca4" class="pequeno" value="0"><br>'."Defesa :".'<input type="number" name="defesa4" class="pequeno" value="0"><br>';
	}
}
else if ($pagina==3) {// se estiver na camada 3 ele puxará as informa~ções dos personagens e criará um objeto para cada personagem

	//personagem 1
	$nome1=@$_POST['nome1'];
	$poder1=@$_POST['poder1'];
	$forca1=@$_POST['forca1'];
	$defesa1=@$_POST['defesa1'];

	//personagem 2
	$nome2=@$_POST['nome2'];
	$poder2=@$_POST['poder2'];
	$forca2=@$_POST['forca2'];
	$defesa2=@$_POST['defesa2'];

	//personagem 3
	$nome3=@$_POST['nome3'];
	$poder3=@$_POST['poder3'];
	$forca3=@$_POST['forca3'];
	$defesa3=@$_POST['defesa3'];

	//personagem 4
	$nome4=@$_POST['nome4'];
	$poder4=@$_POST['poder4'];
	$forca4=@$_POST['forca4'];
	$defesa4=@$_POST['defesa4'];

	class Personagem{//a classe que irá criar meus 4 objatos, um para cada personagem
		public $nome;
		public $poder;
		public $forca;
		public $defesa;
	}

	function Per1(){//informa os dados puxados do personagem 1
		global $nome1;
		global $poder1;
		global $forca1;
		global $defesa1;
		echo "Nome: ".$nome1."<br>";
		echo "Poder: ".$poder1."<br>";
		echo "Força: ".$forca1."<br>";
		echo "Defesa: ".$defesa1."<br>";
	}

	function Per2(){//informa os dados puxados do personagem 2
		global $nome2;
		global $poder2;
		global $forca2;
		global $defesa2;
		echo "Nome: ".$nome2."<br>";
		echo "Poder: ".$poder2."<br>";
		echo "Força: ".$forca2."<br>";
		echo "Defesa: ".$defesa2."<br>"; 
	}

	function Per3(){//informa os dados puxados do personagem 3
		global $nome3;
		global $poder3;
		global $forca3;
		global $defesa3;
		echo "Nome: ".$nome3."<br>";
		echo "Poder: "."Poder: ".$poder3."<br>";
		echo "Força: ".$forca3."<br>";
		echo "Defesa: ".$defesa3."<br>"; 
	}

	function Per4(){//informa os dados puxados do personagem 4
		global $nome4;
		global $poder4;
		global $forca4;
		global $defesa4;
		echo "Nome: ".$nome4."<br>";
		echo "Poder: ".$poder4."<br>";
		echo "Força: ".$forca4."<br>";
		echo "Defesa: ".$defesa4."<br>"; 
	}

	for ($i=1; $i < 5; $i++) {//verifica os 4 personagens
		switch ($i) {
			case 1://personagem 1
				$nome=@$nome1;//@ para não der erro
				$poder=@$poder1;//@ para não der erro
				$forca=@$forca1;//@ para não der erro
				$defesa=@$defesa1;//@ para não der erro
				$personagem1= new Personagem;//cria o objeto
				$personagem1 ->nome = $nome;//informa os atributos do objeto
				$personagem1 ->poder = $poder;//informa os atributos do objeto
				$personagem1 ->forca = $forca;//informa os atributos do objeto
				$personagem1 ->defesa = $defesa;//informa os atributos do objeto
			break;
			
			case 2://personagem 2
				$nome=@$nome2;//@ para não der erro
				$poder=@$poder2;//@ para não der erro
				$forca=@$forca2;//@ para não der erro
				$defesa=@$defesa2;//@ para não der erro
				$personagem2= new Personagem;//cria o objeto
				$personagem2 ->nome = $nome;//informa os atributos do objeto
				$personagem2 ->poder = $poder;//informa os atributos do objeto
				$personagem2 ->forca = $forca;//informa os atributos do objeto
				$personagem2 ->defesa = $defesa;//informa os atributos do objeto
			break;

			case 3://personagem 3
				$nome=@$nome3;//@ para não der erro
				$poder=@$poder3;//@ para não der erro
				$forca=@$forca3;//@ para não der erro
				$defesa=@$defesa3;//@ para não der erro
				$personagem3= new Personagem;//cria o objeto
				$personagem3 ->nome = $nome;//informa os atributos do objeto
				$personagem3 ->poder = $poder;//informa os atributos do objeto
				$personagem3 ->forca = $forca;//informa os atributos do objeto
				$personagem3 ->defesa = $defesa;//informa os atributos do objeto
			break;

			case 4://personagem 4
				$nome=@$nome4;//@ para não der erro
				$poder=@$poder4;//@ para não der erro
				$forca=@$forca4;//@ para não der erro
				$defesa=@$defesa4;//@ para não der erro
				$personagem4= new Personagem;//cria o objeto
				$personagem4 ->nome = $nome;//informa os atributos do objeto
				$personagem4 ->poder = $poder;//informa os atributos do objeto
				$personagem4 ->forca = $forca;//informa os atributos do objeto
				$personagem4 ->defesa = $defesa;//informa os atributos do objeto
			break;	
		}
	}
}
?>