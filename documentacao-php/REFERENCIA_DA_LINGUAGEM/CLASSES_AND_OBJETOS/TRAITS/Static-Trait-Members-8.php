<?php 

/**
 * * STATIC TRAIT MEMBERS(MENBROS DE CARACTERÍSTICA ESTÁTICA)
 * 
 *  Traits podem definir variáveis ​​estáticas, métodos estáticos e propriedades estáticas.
 * 
 * * EXEMPLO #9 VARIAVEIS STATICAS(STATIC VARIABLES)
 * 
*/

//declarando um trait chamado contator que podera ser usado por qualquer classe
trait Contador{
    //metodo publico que poder ser acessado de qualquer classe
    public function incrementa() {
        //variavel estatica, pode ser acessa de qualquer classe, a cada nova chamada o contador e 0, iniciando uma nova contagem, nunca saira de 1
        static $c = 0;
        $c = $c + 1;
        echo "$c <br/>";
    }
}

//declarando um class chamada C1
class C1{
    //declarando que a class C1 utilizara a trait Contador
    use Contador;
}

//declarando um class Chamada C2
class C2{
    //declarando que a class C2, usara a trait Contador
    use Contador;
}

//instanciando um novo objeto da class C1
$o = new C1(); 
//chamando o metodo associado a C1 mas que foi declarado e implementado pela trait Contador
$o->incrementa(); //1
//instanciando um novo objeto da class C2
$p = new C2();
//chamando o metodo associado a C2 que foi declarado e implementado pela trait Contador
$p->incrementa(); //2


/**
 * * EXEMPLO 10 METHODS STATICOS
 * 
 * 
*/

//declarando um trait chamado ExemploStatico 
trait ExemploStatico{
    //declarando um função statica publica que podera ser usada em qualquer classe
    public static function facaAlgumaCoisa() {
        return "Fazendo alguma coisa <br/>";
    }
}

//declarando uma classe chamada Exemplo
class Exemplo{
    //a classe Exemplo utilizara o trait ExemploStatico
    use ExemploStatico;
}

//chamando o metodo statico associado a class Exemplo mas que foi declarado e implementado pela trait ExemploStatico
echo Exemplo::facaAlgumaCoisa();

/**
 * * EXEMPLO #11 PROPRIEDADES STATICAS
 *  
*/

//declarando um trait chamado, ExemploStaticoPropriedade
trait ExemploStaticoPropriedade{
    //declarando um propriedade estatica, que pode ser utilizada em qualquer classe
    public static $static = 'foo';
}

//declarando um class Chamada ExemploPropriedade
class ExemploPropriedade {
    //a class ExemploPropriedade utilizara um trait chamado ExemploStaticoPropriedade que possui uma propriedade statica
    use ExemploStaticoPropriedade;
}

//acessando a propriedade estatica associada a class ExemploPropriedade, que pertence e foi declarada pela trait ExemploStaticoPropriedade
echo ExemploPropriedade::$static;

?>