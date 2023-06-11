<?php 

include("Exemplo02.php");

/**
 * * EXEMPLO #3 ITERAÇÃO DE OBJETO IMPLEMENTADO ITERATORAGGREGATE
 * 
 * A interface IteratorAggregate pode ser utilizada como uma alternativa em vez de implementar todos os métodos de Iterator. IteratorAggregate somente exige a implementação de um único método, IteratorAggregate::getIterator(), que deve retornar uma instância de uma classe que implementa a interface Iterator.
 * 
 * * A interface IteratorAggregate
 * 
 * Interface para criar um Iterator externo.
 
    IteratorAggregate extends Traversable {
        #Métodos
        abstract public getIterator(): Traversable
    }

*/

//definição da class que implementa a interface IteratorAggregate
class MyCollection implements IteratorAggregate{
    //propriedades da classe, com visibilidade privada, somente a classe declarante enxerga
    private $items = array();
    private $count = 0;

    //Definição necessária de interface IteratorAggregate
    //IteratorAggregate::getIterator — Recupera um iterator externo
    public function getIterator() {
        //retorna uma instancia da classe MyIterator iniciado com o paramentro
        return new MyIterator($this->items);
    }

    //Metodo da classe
    public function add($value) {
        //add um novo item no array
        $this->items[$this->count++] = $value;
    }
}

//cria uma instancia de objeto da class MyCollection
$coll = new MyCollection();

//add valores na coleção por meio do metodo do objeto
$coll->add('value 1');
$coll->add('value 2');
$coll->add('value 3');

//para cada valor add na coleção, sera iterado 
foreach($coll as $key => $val) {
    echo "key/value: [$key -> $val] </br>";
}

?>