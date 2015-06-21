<?php
	include '../controller/PessoaController.php';

	$pessoaController = new PessoaController();

	echo $pessoaController->listarPessoas();
?>