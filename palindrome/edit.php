<?php
	require_once 'init.php';
 	include_once 'cliente.class.php';
 	

		 // pega os dados do formulário
		 $id = isset ($_POST['id']) ? $_POST['id']:null;
 		$name = isset ( $_POST ['txtNome']) ? $_POST ['txtNome']:null;
 		$dataNasc = isset ($_POST['txtData']) ? $_POST ['txtData']:null;
 		// validação simples se campos estão vazios
 		if (empty ($nomeCliente) || empty ($email) || empty ($dataNasc))
 		{
 			echo "Campos devem ser preenchidos!!";
 			exit;
 		}
 		// instancia objeto aluno
 		$cliente = new clientes ($nomeCliente,$email,$dataCadastro);
 		// atualiza o BD
 		$PDO = db_connect();
 		$sql = "UPDATE clientes SET nomeCliente = :name,email = :email,dataCadastro = :data
			WHERE idCliente = :id";
 		$stmt = $PDO-> prepare($sql);
		$stmt-> bindParam(':name', $cliente-> getNomeCliente());
 		$stmt-> bindParam(':email', $cliente-> getEmail());
 		$stmt-> bindParam(':data',$cliente-> getDataCadastro());
 		$stmt-> bindParam(':id ', $id,	PDO::PARAM_INT);

 		if ($stmt->execute())
 		{
 			header ('Location:index.php');
 		}
 		else
 		{
 			echo "Erro ao alterar";
 			print_r($stmt->errorInfo());
 		}
 		?>
