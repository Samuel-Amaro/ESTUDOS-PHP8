<?php 

/**
 * * EXEMPLO #3 Exemplo Simples
 * 
 * 
 *  
*/

//Declara uma classe Simples
class TestClass{
    
    //atributo(propriedade publica)
    public $foo;

    //definindo um construtor para a classe
    public function __construct($foo) {
        $this->foo = $foo;
    }

    //metodo magico associado a classe
    public function __toString() {
        return $this->foo;
    }

}

$class = new TestClass('Hello');
//metodo __toString e chamado implicitamente
echo $class;

/**
 * Vale lembrar que antes do PHP 5.2.0 o método __toString() só era chamado quando combinado diretamente com echo ou print. Desde o PHP 5.2.0, ele é chamado no contexto de string (e.g. em printf() com modificador %s) mas não em outros tipos de contextos (e.g. como modificador %d). Desde o PHP 5.2.0, converter objetos sem o método __toString() para string causará E_RECOVERABLE_ERROR. 
 * 
*/
?>