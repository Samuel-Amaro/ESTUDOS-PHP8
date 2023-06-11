<?php 

/**
 * * $GLOBALS
 * 
 *  $GLOBALS — Referencia todas variáveis disponíveis no escopo global
 * 
 * DESCRIÇÃO: 
 * 
 * Um array associativo contendo referências para todas as variáveis que estão atualmente definidas no escopo global do script. O nome das variáveis são chaves do array.
 * 
 * EXEMPLOS
 * 
 * Exemplo #1 Exemplo da $GLOBALS
*/

function test() {
    //variavel criada localmente, so existe no escopo da função
    $foo = "variavel local";
    //acessando a variavel foo atraves do array Global, a chave de cada elemento do array e o nome da variavel que deseja acessar, sendo que a variavel esteja criada
    echo '$foo no escopo global: ' . $GLOBALS["foo"] . "\n";
    echo '$foo no atual escopo(escopo local da função): ' . $foo . "\n";
}

//variavel criada no escopo global, e o mesmo nome da variavel criada no escopo local dentro da funçaõ, mas possui escopos diferentes
$foo = "Conteudo de exemplo!";
test();

?>