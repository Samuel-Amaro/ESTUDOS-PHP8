<?php 

/**
 * * EXEMPLO #3 USANDO __NAMESPACE__ para construção de nome dinâmico 
*/

namespace MyProject;

//definição e implementação de uma função que necessita de um paramentro obrigatorio em sua chamada, esse paramentro e um nome de classe
function get($classname) {
    //cria uma string com uma nome totalmente qualificado para acessar a classe por meio do sua hierarquia de namespace
    $a = __NAMESPACE__ . '\\' . $classname;
    //retorna uma instancia de objeto
    return new $a;
}

/**
 * A namespace palavra-chave pode ser usada para solicitar explicitamente um elemento do namespace atual ou um sub-namespace. É o equivalente em namespace do self operador para classes.
*/

?>