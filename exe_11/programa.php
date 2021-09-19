<?php 

//obtendo valores por meio da variavel pre-definida post, por meio do protocolo HTTP que postou os dados do formulario no servidor
# maneira de obter dados do formulario maneira bruta

$operacao = $_POST["operacoes"];
$numero01 = $_POST["numero01"];
$numero02 = $_POST["numero02"];

if($operacao === "subtracao") {
    echo "$numero01 - $numero02 = " . $numero01 - $numero02 . "</br>";
}else if($operacao === "soma") {
    echo "$numero01 + $numero02 = " . $numero01 + $numero02 . "</br>";
}else if($operacao === "multiplicacao") {
    echo "$numero01 * $numero02 = " . $numero01 * $numero02 . "</br>";
}else if($operacao === "divisao") {
    echo "$numero01 / $numero02 = " . $numero01 / $numero02 . "</br>";
}
?>