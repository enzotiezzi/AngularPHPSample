(function()
{
	app.controller('PessoaController', function($http)
	{
		var self = this;

		self.nome;
		self.idade;
		self.resp = "false";

		self.submit = function (pessoa) 
		{
			$http.post('../server/action/PessoaAction.php', pessoa)
			.success(function(data, status, headers, config)
			{
				this.resp = data;
				if (data == "true") 
				{
					alert("Foi registrado!!");
				}
			});
		};

		self.listar = function()
		{
			$http.get('../server/action/ListarPessoasAction.php')
			.success(function(data, status, headers, config)
			{
				self.nomes = data;
			});
		};
	});
})();