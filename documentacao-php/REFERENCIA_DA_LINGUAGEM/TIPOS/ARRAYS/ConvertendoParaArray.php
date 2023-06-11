<?php

/**
 * * CONVERTENDO PARA ARRAY
 * 
 *  Para qualquer dos tipos: integer, float, string, boolean e resource, converter um valor para um array, resultará em um array com um único elemento com índice zero e valor escalar convertido. Em outras palavras, (array)$scalarValue é exatamente o mesmo que array($scalarValue).
 * 
 * Se um objeto é convertido para um array, o resultado será um array em que seus elementos serão as propriedades do objeto. As chaves serão o nome das propriedades com pequenas notáveis exceções: propriedades inteiras serão inacessíveis; variáveis privada tem o nome da classe prefixando o nome da variável; variáveis protegidas tem um '*' prefixando o nome da variável. Estes prefixos tem bytes nulos em ambos os lados. Isto pode resultar em algum comportamento inesperado:
*/

class A {
    private $A; //Isso se tornará '\ 0A \ 0A'
}

class B extends A{
    private $A; //Isso se tornará '\ 0B \ 0A'
    public $AA; //Isso se tornará 'AA'
}

var_dump((array) new B);

?>