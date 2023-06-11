<?php 

/**
 * * CONVERTENDO PARA OBJETOS
 * 
 *  Se um objeto é convertido para um objeto, ele não é modificado. Se um valor de qualquer outro tipo é convertido para um objeto, uma nova instância da classe interna stdClass é criada. Se o valor for null, a nova instância será vazia. Um array é convertido para um objeto com as propriedades nomeadas pelas chaves e os valores correspondentes, com exceção de chaves numéricas que ficarão inacessíveis a menos que sejam iteradas.
*/

//converte um array que possui um elemento com chave e valor para um objeto que vai possui a chave como propridade do objeto e foo com valor
$obj = (object) array('1' => 'foo');

var_dump(isset($obj->
{'1'})); //exibe 'bool(true)' a partir do PHP 7.2.0; antes exibia 'bool(false)'
var_dump(key($obj)); //exibe 'string(1) "1"' a partir do PHP 7.2.0; antes exibia 'int(1)'

/**
 * Para qualquer outro valor, uma propriedade chamada scalar conterá o valor. 
*/

$obj = (object) 'ciao';
echo $obj->scalar; //exibe 'ciao'
?>