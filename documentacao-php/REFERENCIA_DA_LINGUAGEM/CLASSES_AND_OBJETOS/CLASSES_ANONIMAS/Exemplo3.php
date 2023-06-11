<?php 

/**
 * * EXEMPLO #3
 * 
 *  Aninhar uma classe anônima dentro de outra classe não dá acesso a nenhum método privado ou protegido, ou propriedades da classe externa. Para utilizar os métodos e propriedades protegidas da classe externa, a classe anônima pode estender a classe externa. Para utilizar as propriedades privadas da classe externa na classe anônima, elas devem ser passadas através do construtor:
*/

//definição da classe Outer
class Outer{
    //propriedade da classe com visibilidade privada(somente classe declarante tem acesso)
    private $prop = 1;
    //propriedade da classe com visibilidade protegida(classe declarante e herdeira tem acesso)
    protected $prop2 = 2;

    //metodo protegido da classe
    protected function func1() {
        return 3;
    }

    //metodo publico da classe
    public function func2() {
        //o metodo retorna uma classe anonima, que possui uma paramentro de inicialização obrigatorio, que e passado, usando a classe externa, usa uma propriedade da classe externa
        return new class($this->prop) extends Outer{
            //propriedade privada da classe anonima somente ela acessa
            private $prop3;
            //metodo construtor publico da classe anonima, com uma parametro de inicialização obrigatorio
            public function __construct($prop) {
                $this->prop3 = $prop;
            }
            //metodo publico da interface
            public function func3() {
                //retorna os valores das propriedades da classe anonima, e propriedade da classe externa, e valor da função declarada na classe externa
                return $this->prop2 + $this->prop3 + $this->func1();
            }
        };
    }
}

//imprime
//cria uma instancia de objeto anonima
//chama o metodo da class Outer,
//o metodo retorna um class anonima,
//e chama o metodo da class anonima
echo (new Outer)->func2()->func3();

?>