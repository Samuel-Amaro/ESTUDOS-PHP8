<?php 

/**
 * * EXEMPLO #3 CHAMANDO UM MÉTODO PAI
 * 
 *  Quando uma subclasse sobrecarrega a definição de um método do pai, o PHP não chamará o método pai. Fica a cargo da subclasse chamar o método pai ou não. Isso também se aplica a definições de métodos Construtores e Destrutores, de Sobrecarga e Mágicos.
*/

//definição da class MyClass
class MyClass{
    //metodo da classe
    //metodo com visibilidade protegida(só podem ser acessados na classe declarante e suas classes herdeiras)
    protected function myFunc() {
        echo "MyClass::myFunc() </br>";
    }
}

//definição da classe OtherClass que vai ser uma subClasse(ou classe filha), da class MyClass que e uma SuperClasse(ou uma ClasseBase ou classe Pai) em que vai fazer herança, OtherClass Herda tudo de MyClass.
class OtherClass extends MyClass{
    //SObrescreve e definição da classe estendida
    //muda a visibilidade do metodo para publico
    public function myFunc() {
        //Mas ainda consegue chamar o método na classe Herdada
        //por meio do operador parent que acessa a classe, pai ou super classe, junto com o operador de resoluçaõ de escopo, conseguimos acessa o metodo da classe pai
        parent::myFunc();
        echo "OtherClass::myFunc() </br>";
    }
}

//criando uma instancia de objeto da class OtherClass()
//Como a class não tem construtor definido posso omitir os parentes por que não a argumentos a serem passados para o construtor
$class = new OtherClass();
$class->myFunc();

?>