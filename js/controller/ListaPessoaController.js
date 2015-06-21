(function()
{
	app
	.controller('ListaPessoaController', function($scope, $http)
	{
		$http.get('../server/action/ListarPessoasAction.php')
		.success(function(data, status, headers, config)
		{
			$scope.nomes = data;
		});
	});
})();