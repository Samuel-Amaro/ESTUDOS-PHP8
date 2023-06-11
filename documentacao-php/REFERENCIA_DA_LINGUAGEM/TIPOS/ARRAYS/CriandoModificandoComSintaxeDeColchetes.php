<?php

/**
 * * CRIANDO/MODIFICANDO COM A SINTAXE DE COLCHETES
 * 
 * Você pode também modificar um array existente explicitamente assimilando valores a ele.
 * 
 * Isto é feito apenas assimilando valores para o array enquanto especifica a chave em colchetes. Você pode omitir a chave, colocando um par vazio de colchetes ([]).
 
 $arr[chave] = valor;
 $arr[] = valor;
 // chave pode ser tanto um integer quanto uma string
 // valor pode ser qualquer valor de qualquer tipo

 *
 * Se ainda $arr não existir, será criado, servindo como alternativa para criação de um array. Entretanto, essa prática é desencorajada por que se $arr conter algum valor (por exemplo, uma string de uma variável de requisição), então este valor permanecerá e o [] funcionará como um operador de acesso a string. Sempre será recomentado a inicialização de uma variável por atribuição direta. 
 * 
 * Nota: A partir do PHP 7.1.0, aplicar um operador de índice vazio a uma string lança um erro fatal. Antes, a string era silencionamente convertida em um array.
 * 
 * Para mudar um certo valor, apenas atribua um novo valor para um elemento especificado por sua chave. Se você quiser remover um par chave/valor, você precisa aplicar a função unset() nele.
*/

$arr = array(5=>1, 12 => 2);

$arr[] = 56; //Isto é o mesmo que $arr[13] = 56;
             // nesse ponto do script

$arr["x"] = 42; // Isto acrecenta um novo elemento
                // para o array com a chave "x"

//Desconfigurar uma determinada variável
//unset (mixed $ var [, mixed $ ...]): void

unset($arr[5]); // isto remove um elemento do array

unset($arr); //E isto apaga todo o array

/**
 * Nota: Como mencionado acima, se nenhuma chave for especificada, o maior índice inteiro é obtido, e a nova chave será esse o máximo + 1. Se nenhum índice inteiro existir ainda, a chave será 0 (zero).
 * 
 * Note que a chave inteira de maior valor utilizada não precisa necessariamente existir no array. Ele precisa ter existido no array em algum momento desde sua última reindexação. Veja o seguinte exemplo:
*/

//criando um array normal
$array = array(1, 2, 3, 4, 5);

//Imprime informações legíveis por humanos sobre uma variável
//print_r (mixed $ expression [, bool $ return]): mixed
print_r($array);

//agora apagando todos os itens, mas  deixando o array intacto:
foreach($array as $i => $value) {
    //apga cada item do array indexado
    unset($array[$i]);
}

//mostra informações sobre o array apos ter apagado seus intens
print_r($array);

//Acrescentando um item (note que a chave é 5, em vez de zero).
$array[] = 6;
print_r($array);

//reidexando
$array = array_values($array);
//acrecesntnado um novo elemento no array, automaticamente e indexado no indice 1
$array[] = 7;
print_r($array);

?>