<?php 

include("Pessoa.php");

$p1 = new Pessoa("Rosa", 32);
$p2 = new Pessoa("Tião", 43);
$p3 = new Pessoa("Marcos", 17);

$idade = array($p1->getIdade(), $p2->getIdade(), $p1->getIdade());


function maiorIdade(array $idades) {
    $maior;
    $menor;
    for ($i=0; $i < count($idades); $i++) { 
        for($j = $i + 1; $j < count($idades); $j++) {
             if($idades[$i] > $idades[$j]) {
                 $maior = $idades[$i];
             }else{
                 $maior = $idades[$j];
             }
        }
    }
    return $maior;
}

$maior = strval(maiorIdade($idade));

echo $maior;

?>