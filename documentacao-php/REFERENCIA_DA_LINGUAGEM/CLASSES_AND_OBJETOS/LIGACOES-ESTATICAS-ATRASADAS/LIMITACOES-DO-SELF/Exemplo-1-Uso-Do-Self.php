<?php 

/**
 * * LIMITAÇÕES DO SELF::
 * 
 *  Referências estáticas para a atual classe como self:: ou __CLASS__ são resolvidas usando a classe na qual a função pertence, como onde ele foi definido:
 * 
 * Exemplo #1 Uso do self::
*/

//definição da class 
class A{

    //metodo da estatico associado a classe
    public static function who() {
        //retorna nome da classe
        echo __CLASS__;
    }

    public static function test() {
        //acessando o metodo estatico por meio do operador self, que referencia a propria classe, e usando o opeardor de escopo para acessar o metodo estatico
        self::who();
    }
}

//definição da class B que e uma subClasse da SuperClasse A, sendo assim ha um herança, classe B herdando tudo da classe A
class B extends A{
    //metodo estatico da classe A
    public static function who() {
        echo __CLASS__;
    }
}

//Acessando o metodo estatico da classe A, que e pai da classe
B::test(); //A mas tinha que ser B, porque quem chama e a classe B em tempo de execução


?>