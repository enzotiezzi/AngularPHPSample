<!DOCTYPE html>
<html ng-app="pessoa">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body ng-controller="PessoaController as pessoaCtrl">
	<script type="text/javascript" src="../js/angular.min.js"></script>
	<script type="text/javascript" src="../js/app.js"></script>
	<script type="text/javascript" src="../js/controller/PessoaController.js"></script>
	
	<form  ng-submit="pessoaCtrl.submit(pessoaCtrl.self)">
		<div>Nome: <input type="text" ng-model="pessoaCtrl.self.nome"></div>
		<div>Idade: <input type="text" ng-model="pessoaCtrl.self.idade"></div>
		<div><input type="submit" value="Cadastrar"></div>
	</form>
	{{"Hello"+"Yow"}}

	<div ng-controller="PessoaController as pessoaCtrl">
		<div ng-init="pessoaCtrl.listar()">
			<div ng-repeat="p in pessoaCtrl.nomes">
				Nome: {{p.nome}}
			</div>
		</div>
	</div>
</body>
</html>