<?php 

/**
 * * EXEMPLO #1 CLONANDO UM OBJETO
 * 
 *  
*/

//definição da classe
class SubObject{
    //propriedades estatica da classe
    public static $instances = 0; 
    public $instace; # propriedade da classe com visibilidade publica

    //metodo construtor da classe, sem parametros de inicialização obrigatorios
    //sempre que instancia um obejto da classe ele e chamado
    public function __construct() {
        //a propriedade publica não estatica, recebe o pre-incremento da propriedade estatica, lembrando que propriedade estatica se acessa por meio do operador re soluçaõ de escopo e palavra chave self, sem o operador ->
        $this->instace = ++self::$instances;
    }

    //metodo magico __clone
    //associado a classe
    //quando utilizar a palvra chave clone em uma instancia do objeto esse metodo e chamado
    public function __clone() {
        //a propriedade publica não estatica, recebe o pre-incremento da propriedade estatica, lembrando que propriedade estatica se acessa por meio do operador resoluçaõ de escopo e palavra chave self, sem o operador ->
        $this->instace = ++self::$instances;
    }
}

//defição da classe
class MyCloneable{
    //propriedades da classe
    public $objetc1;
    public $object2;

    //definido o metodo clone
    //metodo associado a classe
    //ao chamar o operador clone o metodo e acionado
    function __clone() {
        //Forçar uma cópia deste-> objeto, caso contrário
        //ele apontará para o mesmo objeto.
        //propriedad object1 e um clone da propriedade object 1
        $this->object1 = clone $this->object1;
    }
}


# cria uma istancia de objeto da class
$obj = new MyCloneable();
# inicializando propriedades com valores
$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

# clonando o obj
$obj2 = clone $obj;

print("Objeto Original: </br>");
print_r($obj);

print("Objeto Clonado: </br>");
print_r($obj2);

?>