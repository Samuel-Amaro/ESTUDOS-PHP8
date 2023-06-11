<?php 

/**
 * * EXEMPLO #1 :: de fora da definição da classe 
*/

//definição de uma classe
class MyClass{
    //definição de uma propriedade constante
    const CONST_VALUE = 'Um valor constante';
}

//variavel armazena nome da classe
$classname = 'MyClass';

//usando o operador de resolução de escopo para acessar a propriedade CONSTANTE definida na classe, usando o operador e o nome da classe conseguimos acessar a constante
echo $classname::CONST_VALUE; //a partir do PHP 5.3.0

//sem utilizar variavel para referencia nome da classe
//acessando a constante definida na classe, usando o operador de resolução de escopo(dois pontos duplos), para acessar a propriedade constante definida
echo MyClass::CONST_VALUE;

?>