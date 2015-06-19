<?php
	include '../model/Pessoa.php';
	include '../controller/PessoaController.php';

	$json = json_decode(file_get_contents('php://input'));
	 
	$pessoa = new Pessoa($json->nome, $json->idade);
	 
	$pessoaController = new PessoaController();

	$pessoaController->cadastrar($pessoa);

	echo "true";
?>