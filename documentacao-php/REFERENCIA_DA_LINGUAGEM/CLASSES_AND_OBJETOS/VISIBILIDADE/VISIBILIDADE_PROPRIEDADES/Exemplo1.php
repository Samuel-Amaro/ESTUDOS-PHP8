<?php 

/**
 * * VISIBILIDADE DE PROPRIEDADES
 * 
 *  Propriedades de classes devem ser declarados como públicas, privadas ou protegidas. Se declarado com var a propriedade será definida como pública.
 * 
 * EXEMPLO #1 DECLARAÇÃO DE PROPRIEDADE
 * 
*/

# definição da classe MinhaClasse
class MinhaClasse{
    //propriedades(atributos ou campos, ou variaveis membro de classe)
    public $publica = 'Public </br>'; //visibilidade publica pode ser acessados de qualquer lugar
    protected $protegida = 'Protected </br>'; //visibilidade da propriedade só pode ser acessados na classe declarante e suas classes herdeiras
    private $privada = 'Private </br>'; //visibilidade da propriedade só pode ser acessados na classe que define o membro privado

    //metodo da classe
    function imprimeAlo() {
        //$this -> referencia o proprio objeto
        echo $this->publica;
        echo $this->protegida;
        echo $this->privada;
    }
}

//criando uma instancia de objeto da Class MinhaClasse
$obj = new MinhaClasse();

//acessando as propriedades da classe, e testando a visibilida das propriedades

echo $obj->publica; //Funciona
//echo $obj->protegida; //Erro fatal
//echo $obj->privada; //Erro fatal

//Chama o metodo da classe
$obj->imprimeAlo(); //Mostra Public, Protected e Private


# definindo a classe 02 chamada MinhaClasse2, e uma sub classe, da Super Classe MinhaClasse, Minha Classe 2 e filha de MinhaClasse e herda metodos e propriedades da Super Classe 
class MinhaClasse2 extends MinhaClasse{
    //Nós podemos redeclarar as propriedades públicas e protegidas mas não as privadas
    //Rescrevendo as propriedades definidas na super classe
    protected $protegida = 'Protected2 </br>';

    //reescrevendo o metodo da super classe, so que sem modificar a assinatura do metodo
    function imprimeAlo() {
        echo $this->publica;
        echo $this->protegida;
        echo $this->privada; //propriedade indefinida, não herda da SuperClasse, aqui na MinhaClasse2 essa propriedade esta indefinida., porque so pode ser acessada na classe que a definiu como privada
    }
}

# instanciando um objeto da classe MinhaClasse2
$obj2 = new MinhaClasse2();
echo $obj2->publica; //Funciona
//echo $obj2->privada; //indefinido propriedade em MinhaClasse2, so pode ser acessada na classe que definiu a propriedade como privada
//echo $obj2->protegida; //Erro Fatal
$obj2->imprimeAlo(); //Mostra Public, Protected2, Undefined

/**
 * Nota: O uso da declaração de variável com a palavra-chave var ainda é suportada por razões de compatibilidade (como um sinônimo para a palavra-chave public). Em versões do PHP anteriores ao 5.1.3, isso gerará um aviso do tipo E_STRICT. 
*/

?>