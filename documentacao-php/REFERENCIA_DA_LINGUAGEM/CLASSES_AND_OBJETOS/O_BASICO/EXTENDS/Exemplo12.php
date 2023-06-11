<?php 

/**
 * * EXEMPLO #12 ERRO FATAL QUANDO UM MÉTODO DERIVADO TRANSFORMA UM PARÂMETRO OPCIONAL EM MANDATÓRIO
 * 
 *  
*/

//definição da classe Base
class Base{
    //definição de um metodo da classe Base, possui um parametro do tipo int com um valor padrão 5
    public function foo(int $a = 5) {
        echo "Válido?\n";
    }
}

//definição da subclass Extend, que e filha da superClasse Base, herdando os metodos e atribuitos
class Extend extends Base{
    //metodoa classe, sendo sobrescrito, modificando a assinatura, fazendo o parametro ser obrigatorio
    function foo(int $a) {
        parent::foo($a);
    }
}

?>