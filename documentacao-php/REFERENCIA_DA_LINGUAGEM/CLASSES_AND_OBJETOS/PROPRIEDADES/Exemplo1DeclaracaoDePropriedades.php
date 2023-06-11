<?php 

/**
 * * EXEMPLO #1 DECLARAÇÃO DE PROPRIEDADES
 *  
*/

//definição de uma classe chamada SimpleClass
class SimpleClass{

    //válido a partir do PHP 5.6.0:
    //declarando uma propriedade, ou variavel menbro da classe(atributo ou campo), publica onde toda instancia tem acesso, e ela ja começa inicializada com um valor de inicialização, esta propriedade e como uma variavel de classe, ou somente uma variavel que esta ligada a classe, para acesar precisa instancia a classe, ou somente acessala, por meio do operdaod
    public $var1 = 'hello' . 'world';
    //valido a partir do PHP 5.3.0
    public $var = <<<EOD
        hello world
    EOD;
    //valido a partir do PHP 5.6.0
    public $var3 = 1+2;
    //declarações de propriedade inválidas:
    //a propriedade tem o valor de receber a referencia ao metodo estatico
    public $var4 = self::myStaticMethod();
    //declaraões de propriedade validas
    public $var6 = myConstant;
    //propriedade que recebe um array que possui itens booleanos
    public $var7 = array(true, false);
    //valido a partir do PHP 5.3.0
    public $var8 = <<<'EOD'
        hello world
    EOD;
}

?>