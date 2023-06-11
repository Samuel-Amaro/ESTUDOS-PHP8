<?php

/**
 * * CHANGING METHOD VISIBILITY(ALTERANDO A VISIBILIDADE DO MÉTODO)
 * 
 * Usando a AS sintaxe, também se pode ajustar a visibilidade do método na classe expositora.
 * 
 * * EXEMPLO 6 ALTERANDO VISIBILIDADE DO METODO
*/

//declarando uma trait de nome OlaMundo que tera 1 metodo que podera ser usado em qualquer classe
trait OlaMundo{
    //metodo publico que podera ser usado por qualquer classe
    public function digaOla() {
        echo 'Hello World!';
    }
}

//muda visibilidade de digaOla
//declara um class chamada MyClass1
class MyClass1{
    //a class MyClass1 utiliza a trait OlaMundo, sendo assim podera add novas mudanças de visibilidade no metodo declarada pela trait
    use OlaMundo {
        //mudando visibilidade do methodo declarada na trait
        digaOla as protected;
    }
}

//apelidando metodo com mudança de visibilidade
//digaOla visibilidade não mudada
//declarando um class chamado MyClass2
class MyClass2{
    //a class MyClass2 usara a trait HelloWorld, e seus metodos declarados dentro dele
    use OlaMundo{
        //mudando a visibilidade do metodo digaOla para privada e renomeando a visibilidade
        digaOla as private myPrivateHello;
    }
}

?>