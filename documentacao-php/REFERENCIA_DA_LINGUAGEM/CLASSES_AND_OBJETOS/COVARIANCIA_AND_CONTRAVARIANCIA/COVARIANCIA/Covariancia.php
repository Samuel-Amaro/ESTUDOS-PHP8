<?php

/**
 * * COVARIÂNCIA
 * 
 *  Para ilustrar como a covariância funciona, uma classe pai abstrata simples, Animal , é criada. Animal será estendido por classes de crianças, Gato e Cachorro .
*/

//definição de uma classe que não pode ser instanciada
abstract class Animal{
    //propriedade da classe, com visibilidade protegida, classe declarante e herdeiras podem acessar propriedade
    protected string $name;
    //metodo construtor da classe com um paramentro de inicialização obrigatorio do tipo string
    public function __construct(string $name) {
        $this->name = $name;
    }
    //metodo da classe abstrato, e so a assinatura do metodo, classes herdeiras devem obrigatoriamente implementar o metodo
    abstract public function speak();
}

//definição da classe Dog que e filha da classe Animal, herda tudo de animal e implementa os metodos abstratos
class Dog extends Animal{
    //metodo da classe
    public function speak() {
        echo $this->name . " barks";
    }
}

//definição da classe Cat que e filha da classe Animal, herda tudo de animal e implementa os metodos abstratos de Animal
class Cat extends Animal{
    //metodo da classe
    public function speak() {
        echo $this->name . " meows";
    }
}


/**
 *  Observe que não há métodos que retornem valores neste exemplo. Algumas fábricas serão adicionadas para retornar um novo objeto do tipo de classe Animal , Gato ou Cachorro .
*/

//definição da interface AnimalShelter

interface AnimalShelter{
    //assinatura de um metodo, com paramentros e tipo de retorno especificado
    public function adopt(string $name): Animal;
}

//definição da classe CatShelter que implementa a interface AnimalShelter e suas assinaturas de metodos
class CatShelter implements AnimalShelter{
    //implementando metodo da inteface
    public function adopt(string $name): Cat //em vez de retornar o tipo de classe Animal, ele pode retornar o tipo de classe Cat 
    {
        return new Cat($name);
    } 
}

//definição da classe DogShelter que implementa a interface AnimalShelter
class DogShelter implements AnimalShelter{
    //implementando metodo da inteface
    public function adopt(string $name): Dog //em vez de retornar o tipo de classe Animal, ele pode retornar o tipo de classe Cachorro
    {
        return new Dog($name);
    }
}

$cs = new CatShelter;
$kitty = $cs->adopt("Ricky");
$kitty->speak();
echo "</br>";

$ds = new DogShelter;
$doggy = $ds->adopt("Mavrick");
$doggy->speak();

?>