<?php 

/**
 * * CONTRAVARIANCIA
 * 
 *  Continuando com o exemplo anterior com as classes Animal , Cat e Dog , uma classe chamada Food and AnimalFood será incluída e um método eat (AnimalFood $ food) será adicionado à classe abstrata Animal
 *  
*/

//definição da classe
class Food{}

//definição da classe AnimalFood que herda tudo de Food, herança
class AnimalFood extends Food{}

//definição de uma classe que não pode ser instanciada
abstract class Animal{
    //propriedade da classe, com visibilidade protegida, classe declarante e herdeiras podem acessar propriedade
    protected string $name;
    //metodo construtor da classe com um paramentro de inicialização obrigatorio do tipo string
    public function __construct(string $name) {
        $this->name = $name;
    }
    //metodo da classe
    public function eat(AnimalFood $food) {
        //nome + eats + nome class e nome do objeto;
        echo $this->name . " eats " . get_class($food);
    }
}

/**
 * Para ver o comportamento da contravariância, o método eat é sobrescrito na classe Dog para permitir qualquer objeto do tipo Food . A classe Cat permanece inalterada.
*/

//definição da classe Dog que e filha da classe Animal, herda tudo de animal e implementa os metodos abstratos
class Dog extends Animal{
    //metodo da super classe, sendo sobrescrito, mas sem muda assinatura, so fazendo uma mudança no tipo do paramentro, o paramentros continua obrigatorio, mas com tipos diferentes agora
    public function eat(Food $food) {
        echo $this->name . " eats " . get_class($food);
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


/**
 *  O próximo exemplo mostrará o comportamento da contravariância.
*/


$cs = new CatShelter;
$kitty = $cs->adopt("Ricky");
$catFood = new AnimalFood();
$kitty->eat($catFood);
echo "</br>";

$ds = new DogShelter;
$doggy = $ds->adopt("Mavrick");
$banana = new Food();
$doggy->eat($banana);


?>