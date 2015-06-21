<?php
	include '../model/Pessoa.php';
	class PessoaController
	{
		public function cadastrar($pessoa)
		{
			$con = new mysqli('127.0.0.1', 'root', '123', 'db_teste');
			
			$statement = $con->prepare('INSERT INTO TB_TESTE (NOME) VALUES (?)');
			$statement->bind_param('s', $pessoa->getNome());

			$statement->execute();
			$statement->close();

			$con->close();
		}

		public function listarPessoas()
		{
			$con = new mysqli('127.0.0.1', 'root', '123', 'db_teste');
			
			$statement = $con->prepare('SELECT * FROM TB_TESTE');
		
			if ($statement->execute())
			{
				$result = $statement->get_result();

				$nomes = array();
				while ($nome = $result->fetch_array()) 
				{
					$pessoa = new Pessoa($nome['nome'], 0);
					$pessoa = array('nome' => $pessoa->getNome(), 'idade' => $pessoa->getIdade());
					$nomes[] = $pessoa;
					
				}
			}

			$statement->close();
			$con->close();

			return json_encode($nomes);
		}
	}
?>