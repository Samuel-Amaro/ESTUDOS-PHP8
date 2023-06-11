<?php 

/**
 * Aviso: Renomear um nome de parâmetro em uma classe derivada não é uma quebra de assinatura. Entretanto isso é desencorajado porque ocasionará em um Error se argumentos nomeados forem utilizados na chamada.
 * 
 * Exemplo #1 Erro ao utilizar argumentos nomeados renomeados em uma classe derivada
*/

//definição da class A
class A{
    //metodo da classe, com dois paramentros
    public function test($foo, $bar) {

    }
}

//definição da subClasse B, que herda propriedades e metodos da SuperClasse A,
class B extends A{
    //sobrescrevendo o metodo da super classe, modificnado a assinatura, mudando o nome dos parametros, isso da imcompatibilidade das assinaturas
    public function test($a, $b) {

    }
}

# instancia um objeto da clas B
$obj = new B;

//passando parâmetros de acordo com o contrato de A::test()
$obj->test(foo: "foo", bar: "bar"); //ERROR!

?>