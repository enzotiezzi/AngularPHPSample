<!DOCTYPE html>
<html ng-app="pessoa">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<script type="text/javascript" src="../js/angular.min.js"></script>
	<script type="text/javascript" src="../js/app.js"></script>
	<script type="text/javascript" src="../js/controller/PessoaController.js"></script>

	<form ng-controller="PessoaController as pessoaCtrl" ng-submit="pessoaCtrl.submit()">
		<div>Nome: <input type="text" ng-model="pessoaCtrl.nome"></div>
		<div>Idade: <input type="text" ng-model="pessoaCtrl.idade"></div>
		<div><input type="submit" value="Cadastrar"></div>
	</form>
	{{"Hello"+"boy"}}
</body>
</html>