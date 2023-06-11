<?php

/**
 * Faça um script que peça 3 notas de um aluno e mostra sua média.
*/

//as notas vem do input text de forma de texto string
//tem que converter as notas para doubles e antes disso formatar para . as ,

$notaText01 = $_POST['nota01'];
$notaText02 = $_POST['nota02'];
$notaText03 = $_POST['nota03'];

//armazena as variaveis por referencia
$notasText = array(
                "nota01" => &$notaText01, 
                "nota02" => &$notaText02, 
                "nota03" => &$notaText03
);

//troca as virgulas por ponto
foreach($notasText as $chave => $valor) {
    //echo "$valor <br/>";
    for($i=0; $i < strlen($valor); $i++) { 
       if($valor[$i] == ",") {
           $valor[$i] = ".";
       }else{
           //faz nada
       } 
    }
    //echo "$valor <br/>";
}


//converte as notas para doubles
$nota1 = doubleval($notaText01);
$nota2 = doubleval($notaText02);
$nota3 = doubleval($notaText03);

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "A media do Aluno com as notas $nota1, $nota2, $nota3 = $media";

?>