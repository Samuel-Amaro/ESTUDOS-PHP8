<?php

//EXEMPLO #2 Simples uso do static::

//definição da class 
class A{

    //metodo da estatico associado a classe
    public static function who() {
        //retorna nome da classe
        echo __CLASS__;
    }

    public static function test() {
        //acessando o metodo estatico por meio do operador static, fazendo assim levar em conta o contexto de quem esta chamando a função estatica, e não de onde esta definida
        static::who(); //Lá vêm as ligações estáticas atrasadas
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
B::test(); //B em tempo de execução que chama test() que esta definido em A, mas B, herda de A, mas B que esta chamando test por tempo de execução

/**
 * Nota: Em contextos não estáticos a classe chamada será a classe da instância do objeto. Assim como $this-> chamará métodos privados do mesmo escopo, utilizar static:: pode ter resultados diferentes. Outra diferença é que static:: só pode referenciar propriedades estáticas. 
*/


?>