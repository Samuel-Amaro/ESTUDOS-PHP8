<?php 

/**
 * * EXEMPLO #1 DEFINIÇÃO SIMPLES DE UMA CLASSE
 * 
 *  
*/

//sintaxe para se criar uma classe ou definir uma
class NomeClasse {
    //definições de propriedades e métodos pertencentes à classe.
}

//exemplo de definição de uma classe
class SimpleClass {
    //declaração de propriedade
    public $var = 'um valor padrão';

    //declaraçaõ de método
    public function displayVar() {
        echo $this->var;
    }
}

?>