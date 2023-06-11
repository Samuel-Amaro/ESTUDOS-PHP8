<?php

use Mundo as GlobalMundo;
use Ola as GlobalOla;

/**
 * * TRAITS COMPOSED FROM TRAITS(TRAITS COMPOSOT DE TRAITS)
 * 
 * Assim como as classes podem fazer uso de TRAITS, o mesmo ocorre com outras TRAITS. Ao usar um ou mais TRAITS em uma definição de TRAIT, ele pode ser composto parcial ou totalmente pelos membros definidos naqueles outros TRAITS.
 * 
 * * EXEMPLO #7 TRAITS COMPOSED FROM TRAITS
 * 
*/

//criando um trait chamado Ola que podera ser usado em qualquer classe
trait Ola{
    //metodo publico que poder ser usado em qualquer classe
    public function digaOla() {
        echo 'Hello';
    }
}

//criando um trait chamado Mundo que podera ser usado em qualquer classe
trait Mundo{
    //metodo publico que pode ser usado em qualquer classe
    public function digaMundo() {
        echo 'World!';
    }
}

//criando um trait chamado OlaMundo, que não tera metodo declarado em seu escopo mas usara definições de metodos de outros traits, esse e um trait que utiliza outros traits
trait OlaMundo{
    //usando o trait Ola, e o Mundo
    use Ola, Mundo;
}


//declarando um classe chamada MeuOlaMundo
class MeuOlaMundo{
    //a classe MeuOlaMundo utilizara o trait OlaMundo que por sua vez utiliza os traits Ola, e Mundo
    use OlaMundo;
}

//criando uma nova instancia de objeto da class MeuOlaMundo
$o = new MeuOlaMundo();
//chama o metodo associado a class MeuOlaMundo, mas que foi definido pela trait Ola, que esta sendo utilizada pela trait OlaMundo
$o->digaOla();
//chama o metodo associado a class MeuOlaMundo, mas que foi definido pela trait Mundo, que esta sendo utilizada pela trait OlaMundo
$o->digaMundo();
?>