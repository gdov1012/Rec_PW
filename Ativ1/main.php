<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once 'pessoa.php';
require_once 'professor.php';
require_once 'aluno.php';
require_once 'funcionario.php';

$professor = new professor ("Andréa", "123.456.789.12", "12/34/5678", "001", "Português");
$aluno = new aluno ("Lucas", "123.456.789.12", "12/34/5678", "001", "Psicologia");
$funcionario = new funcionario ("Simone", "123.456.789.12", "12/34/5678", "001", "Gerente de Financeiro");

echo $professor->exibirInformacoes() . "<br>";
echo $aluno->exibirInformacoes() . "<br>";
echo $funcionario->exibirInformacoes() . "<br>";
?>
</body>
</html>