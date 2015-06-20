(function()
{
	app
	.controller('PessoaController', function($http)
	{
		this.nome;
		this.idade;

		this.submit = function (pessoa) 
		{
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