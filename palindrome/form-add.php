<?php
	require 'init.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Envio de Dados</title>	
		<meta charset="utf-8">
		<script type ="text/javascript" src ="jquery-2.1.1.min.js"></script>
		<script type ="text/javascript" src ="jquery.maskedinput.js"></script>
	</head>
	<script>
	$(document).ready(function(){
		$("#data").mask("99/99/9999");
});
	</script>
	</head>
	<body>
		<form method="post" name="formCadastro" action="add.php" enctype="multipart/form-data">
				<h1>Cadastro Clientes</h1>
			<table width="100%">
				<tr>
					<th width="18%">Nome</th>
					<td width="82%"><input type="text" name="txtNome"></td>
				</tr>				
				<tr>
				
				<tr>
					<th width="18%">Email</th>
					<td width="82%"><input type="text" name="txtEmail"></td>
				</tr>				
								
				<tr>
					<th>Data de Cadastro</th>
					<td><input type="text" id="data" name="txtData"></td>
				</tr>
				<tr></tr>
				<tr>
					<td></td>				
					<td><input type="submit" name="bntEnviar" value="Cadastrar">
					<input type="reset" name="bntLimpar" value="Limpar"></td>
				</tr>

			</table>
		</form>
		
