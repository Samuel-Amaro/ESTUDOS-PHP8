<?php 

/**
 * * EXEMPLO #1 EXEMPLO DE CLASSE ABSTRATA
 * 
 *  
*/

//definindo uma classe abstrata
//Classe definidas como abstradas não podem ser instanciadas
abstract class ClasseAbstrata{
    //definindo metodos da classe, como abstratos
    //e com visibilidade protegida, somente a classe declarante e classe herdeiras acessam os metodos
    //Força a classe que herda ClasseAbstrata a definir esse método
    //Métodos são definidos como abstratos declarando a intenção em sua assinatura - não podem definir a implementação.
    //Aqui neste metodos abstratos definimos so a assinatura do metodo na classe abstrata, não definos oque o metodo vai fazer.
    abstract protected function pegarValor();
    abstract protected function valorComPreFixo($prefixo);

    //define um metodo comun da classe, como não e asbtrato pode-se definir oque vai fazer
    public function imprimir() {
        //chama o operador this(referencia este objeto)
        print $this->pegarValor();
    }
}

//definição da classe ClasseConcreta1, que e uma subClasse da super Classe ClasseAbstrata, vai herdar os metodos e propriedades da super Classe, herança
//Ao herdar uma classe abstrata, todos os métodos marcados como abstratos na na declaração da classe pai devem ser implementados na classe filha;
//usando a mesma assinatura definida na classe pai e visibilidade dos metodos 
class ClasseConcreta1 extends ClasseAbstrata {
    //definindo a implemntação do metodo abstrato da SuperClasse abstrata, seguindo assinatura, definida e a visibilidade
    protected function pegarValor() {
        return "ClasseConcreta1";
    }
    //definindo a implementação do metodo abstrato da SuperClasse abstrata, seguindo a assinatura definida do metodo na super classe a visibilidade não pode mudar nada na assinatura
    public function valorComPreFixo($prefixo) {
        return "{$prefixo}ClasseConcreta1";
    }
}

//definição da classe ClasseConcreta2, que e uma subClasse da super Classe ClasseAbstrata, vai herdar os metodos e propriedades da super Classe, herança
//Ao herdar uma classe abstrata, todos os métodos marcados como abstratos na na declaração da classe pai devem ser implementados na classe filha;
//usando a mesma assinatura definida na classe pai e visibilidade dos metodos 
class ClasseConcreta2 extends ClasseAbstrata{
    //implementando o metodo abstrato da super classe
    protected function pegarValor() {
        return "ClasseConcreta2";
    }
    //implementando metodo abstrado da super classe
    public function valorComPrefixo($prefixo) {
        return "{$prefixo}ClasseConcreta2";
    }
}

//criando uma instancia de objeto da class ClasseConcreta1
$classe1 = new ClasseConcreta1;
//chama metodo da classe
$classe1->imprimir();
//chama o metodo da classe passando um paramentro
echo $classe1->valorComPreFixo('FOO_') . "</br>";

//criando uma instancia de objeto da class ClasseConcreta2
$classe2 = new ClasseConcreta2;
//chama o metodo da classe
$classe2->imprimir();
//chama o metodo da classe passando um paramentro
echo $classe2->valorComPreFixo('FOO_') . "</br>";

?>