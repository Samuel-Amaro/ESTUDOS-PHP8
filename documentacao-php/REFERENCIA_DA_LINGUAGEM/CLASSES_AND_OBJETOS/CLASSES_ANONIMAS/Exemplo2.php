<?php 

/**
 * * EXEMPLO #2
 * 
 * Podem passar argumentos através de seus construtores, estender outras classes, implementar interfaces, e usar traits como uma classe normal faz: 
*/

//definição da uma interface
class SomeClass{}
//declaração de uma inteface
interface SomeInterface{}
//declaração de uma trait
//Traits são um mecanismo para reutilização de código em linguagens de herança única, como PHP. Um Trait se destina a reduzir algumas limitações de herança única, permitindo que um desenvolvedor reutilize conjuntos de métodos livremente em várias classes independentes que vivem em diferentes hierarquias de classes.
trait SomeTrait{}

//mostra informações sobre uma variavel ou objeto
var_dump(
    //declara uma classe anonima que herda da classe SomeClass e implementa a interface SomeInteface
    new class(10) extends SomeClass implements SomeInterface {

        //propriedade privada da clasee, somente classe declarante tem acesso
        private $num;

        //metodo construtor da classe anonima, que possui um paramentro obrigatorio de instanciação
        public function __construct($num) {
            $this->num = $num;
        }

        //usando a trait declarada
        use SomeTrait;
    }
);
?>