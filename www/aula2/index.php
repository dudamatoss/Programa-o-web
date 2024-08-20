<?php

$numero1 = 10;
$numero2 = 20;

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;

echo "A soma dos numeros é {$soma}<br>";
echo "A soma dos numeros é {$subtracao}<br>";
echo "A soma dos numeros é {$multiplicacao}<br>";
echo "A soma dos numeros é {$divisao}<br>";

$a = 10;
$b = 20;
$c = 30;

//Resultado = (a * b) / c
$resultado = (($a * $b) / $c) + 10;
echo $resultado;

$primeiroNome = "Eduarda";
$sobrenome = "Matos";

$nomeCompleto = "<br>$primeiroNome $sobrenome";
echo $nomeCompleto;

$existe = str_contains(haystack: $nomeCompleto, needle: "Matos");

if($existe){
    echo " <br>O texto existe";
}else {
    echo "<br>O texto não existe";
}


$inteiro = 10;
$string = "String";
$float = 10.2;

$array = ["Banana", "Kiwi", "Maçã", "Melão"];

echo "<pre>";
var_dump($array);

krsort($array);
var_dump($array);

ksort($array);
var_dump($array);

$dataAtual = new \DateTime();
echo $dataAtual->format('d/m/Y H:i:s');

echo "<br> Iniciando a contagem<br>";
for($i=1; $i <= 10; $i++) {
    echo"$i<br>";
}

$arrayNomes = ["Ana", "João", "Lucas", "Mateus", "Maria"];

foreach($arrayNomes as $key => $value) {
    echo "<br>chave: $key, valor: $value";
}
$count = 0;
do{
    $count++;

} while($count < 10);

$condicao = true;
$count = 0;
while($condicao){
    $count++;

    if($count == 10){
        $condicao = false;  
    }
}