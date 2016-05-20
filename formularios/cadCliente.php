<!DOCTYPE html>
<html lang="pt-br">
	<head>		
		<title>Envio de Dados</title>
		<meta charset="utf-8">
	</head>
	<body>

	<?php
		echo "<h1>Os dados informados são:</h1>";
		$nome = $_POST["txtNome"];
		$ender = $_POST["txtEndereco"];
		$cpf = $_POST["txtCPF"];
		$estado = $_POST["listEstados"];
		$dtNasc = $_POST["txtData"];
		$sexo = $_POST["sexo"];
		$cinema = $_POST["checkCinema"];
		$musica = $_POST["checkMusica"];
		$info = $_POST["checkInfo"];
		$login = $_POST["txtLogin"];
		$senha1 = $_POST["txtSenha1"];
		$senha2 = $_POST["txtSenha2"];

		$camposOK = true;
	
		// Verifica se o número digitado contém todos os digitos
    	$cpf = str_pad(ereg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);
	
		// Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
    	if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || 
		$cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || 
		$cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || 
		$cpf == '88888888888' || $cpf == '99999999999') {
			$camposOK = false;
			echo "CPF Incorreto<br>";		
   		} else {   
		// Calcula os números para verificar se o CPF é verdadeiro
     		for ($t=9;$t<11;$t++) {
         	 	for ($d=0,$c=0;$c<$t;$c++) {
					$d += $cpf{$c} * (($t+1)-$c);
          		}

         		$d = ((10 * $d) % 11) % 10;
 
           		if ($cpf{$c} != $d) {
                	$camposOK = false;
					echo "CPF Incorreto<br>";					
          		 }
        	} 
        $camposOK = true;
   		}	

		$dataD = substr($dtNasc, 0, 2);
		$dataM = substr($dtNasc, 3, 2);
		$dataA = substr($dtNasc, 6, 4);
			
		$dia = (int)$dataD;
		$mes = (int)$dataM;	
		$ano = (int)$dataA;

		if (($mes == 1) || ($mes == 3) || ($mes == 5) || ($mes == 7) || ($mes == 8) || 
		($mes == 10) || ($mes == 12) ){
			if ( ( $dia < 1) || ( $dia > 31) ) {
				echo "Data Incorreta<br>";
				$camposOK = false;
			}
		} else if (($mes == 4) || ($mes == 6) || ($mes == 9) || ($mes == 11)){
			if (( $dia < 1) || ( $dia > 30)) {
				echo "Data Incorreta<br>";
				$camposOK = false;
			}
		} else if ($mes == 2) {
				if ((($ano % 4) == 0) && (( $ano % 100) != 0) || (( $ano % 400) == 0)) {
					if (($dia < 1) || ($dia > 29)) {
						echo "Data Incorreta<br>";
						$camposOK = false;
					}
				} else {
					if (($dia < 1) || ($dia > 28)) {
					echo "Data Incorreta<br>";
					$camposOK = false;
				}
				}
		} else {
			echo "Data Incorreta<br>";
			$camposOK = false;
		}	
		
		
		if($nome == ""){
			echo "Nome Incorreto <br>";
			$camposOK = false;
		}

		if($ender == ""){
			echo "Endereço Incompleto <br>";
			$camposOK = false;
		}

		if($senha1 != $senha2){
			echo "Senhas Não Confere <br>";
			$camposOK = false;
		}

		if($camposOK){
			echo "<table border='0' cellpadding='5'>";
			echo "<tr><td>Nome:</td><td><b>$nome</b></td></tr>";
			echo "<tr><td>CPF:</td><td><b>$cpf</b></td></tr>";
			echo "<tr><td>Endereço:</td><td><b>$ender</b></td></tr>";
			echo "<tr><td>Estado:</td><td><b>$estado</b></td></tr>";
			echo "<tr><td>Data de Nascimento:</td><td><b>$dtNasc</b></td></tr>";
			echo "<tr><td>Sexo:</td><td><b>$sexo</b></td></tr>";
			echo "<tr><td>Login:</td><td><b>$login</b></td></tr>";
			echo "<tr><td>Senha:</td><td><b>$senha1</b></td></tr>";

			echo "<tr><td>Áreas de Interesse:</td><td><b>";
			if($cinema)
				echo "Cinema <br>";			
			if($musica)
				echo "Música <br>";
			if($info)
				echo "Informática <br>";
			echo "</b></td></tr></table>";
		}			
	?>

	</body>
</hml>
