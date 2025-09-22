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
require_once 'corredor.php';
require_once 'nadador.php';

$corredor = new corredor ("João", "16", 7);
$nadador = new nadador("Iago", "16", 8);

echo "<h3>Lista de corredores</h3>";
echo $corredor->exibirInformacoes() . "<br>";
echo $corredor->correr() . "<br><br>";

echo "<h3>Lista de Nadadores</h3>";
echo $nadador->exibirInformacoes() . "<br>";
echo $nadador->nadar() . "<br><br>";
?>
</body>
</html>