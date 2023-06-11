<?php 

/**
 * * EXEMPLO #4 MODIFICADORES DE VISIBILIDADE EM CONSTANTES DE CLASSE  
*/

//definição de uma classe
class foo{
    //A PARTIR DO PHP 7.1.0
    //definindo uma constante publica que vai ser uma propriedade de classe, todas instancias vai ter acesso, a constante
    public const BAR = 'bar';
    //uma constante privada, somente no escopo de dentro da classe vai ter acesso, somente a propria classe tem acesso a constante, so dentro do escopo da classe tem acesso a aconstante
    private const BAZ = 'baz';
}

echo Foo::BAR, PHP_EOL;
echo Foo::BAZ, PHP_EOL;

?>