<!DOCTYPE html>
<html>
<head>
	<title>Form com PHP</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
$nome = isset($_GET["nome"])?$_GET["nome"] :"não informado";
$senha = isset($_GET)["senha"]?$_GET["senha"]:"não informado";
$email = isset($_GET["email"])?$_GET["email"]:"não informado";

echo $nome;
echo $senha;
echo $email;

?>
</body>
</html>