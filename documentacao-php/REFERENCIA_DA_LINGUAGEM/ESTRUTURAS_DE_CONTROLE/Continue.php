<?php

/**
 * * continue
 * 
 * continue é utilizado em estruturas de laço para pular o resto da iteração atual, e continuar a execução na validação da condição e, então, iniciar a próxima iteração.
 * 
 * Nota: No PHP a instrução switch é considerada uma estrutura de laço para os propósitos do continue. O continue se comporta como o break (quando nenhum argumento é passado), mas irá gerar um aviso, pois este é susceptível de ser um erro. Se um switch está dentro de um laço, continue 2 irá continuar a próxima interação do laço externo.
 * 
 * O continue aceita um argumento numérico opcional que diz quantos níveis de laços aninhados deve pular. O valor padrão é 1, saltando para o final do laço atual.
*/

$arrayTeste = array(
    "um" => 1,
    "dois" => 2,
    "três" => 3,
    "dezessete" => 17
);

foreach($arrayTeste as $chave => $valor) {
    if(!($chave % 2)) {
        //pula menbros pares
        continue;
    }
    do_something_odd($valor);
}

$i = 0;
while($i++ < 5) {
    echo "Outer<br/>";
    while(1) {
        echo "Middle<br/>";
        while(1) {
            echo "Inner<br/>";
            continue 3;
        }
        echo "Isso nunca obtém saída <br/>";
    }
    echo "Nem isso <br/>";
}

?>