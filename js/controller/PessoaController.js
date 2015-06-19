(function()
{
	app
	.controller('PessoaController', function($http)
	{
		this.nome;
		this.idade;

		this.submit = function () 
		{
			var pessoa = {
				nome : this.nome,
				idade : this.idade
			};

			$http.post('../server/action/PessoaAction.php', pessoa)
			.success(function(data, status, headers, config)
			{
				if (data == "true") 
				{
					alert("Foi registrado!!");
				}
			});
		};
	});
})();