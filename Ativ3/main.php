<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
require_once 'animal.php';
require_once 'leao.php';
require_once 'elefante.php';

$leao1 = new leao("Alex", "leão", 8, 35);
$leao2 = new leao("Simba", "leão", 11, 28);
$elefante1 = new elefante("Dumbo", "elefante", 20 , 2.4);
$elefante2 = new elefante("Bilu", "elefante", 12 , 1.8);

echo "<h3>Leões do Zoo</h3>";
echo $leao1->exibirInformacoes() . "<br>";
echo $leao1->rugir() . "<br>";
echo $leao1->conversao_leao() . "<br><br>";
echo $leao2->exibirInformacoes() . "<br>";
echo $leao2->rugir() . "<br>";
echo $leao2->conversao_leao() . "<br><br>";

echo "<h3>Elefantes do Zoo</h3>";
echo $elefante1->exibirInformacoes() . "<br>";
echo $elefante1->trombetar() . "<br>";
echo $elefante1->conversao_elefante() . "<br><br>";
echo $elefante2->exibirInformacoes() . "<br>";
echo $elefante2->trombetar() . "<br>";
echo $elefante2->conversao_elefante() . "<br><br>";
?>
</body>
</html>