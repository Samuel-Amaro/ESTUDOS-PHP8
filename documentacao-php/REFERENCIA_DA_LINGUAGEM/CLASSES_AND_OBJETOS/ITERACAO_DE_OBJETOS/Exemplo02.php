<?php 

/**
 * * EXEMPLO #2 Iteração de objeto implementando iterator
 * 
 *  Indo um pouco além, pode-se implementar a interface Iterator. Isso permite que o objeto decida como será iterado e quais valores estarão disponíveis em cada iteração.
 * 
 * * A INTERFACE ITERATOR
 * 
 * Interface para iteradores externos ou objetos poderem ser iterados por eles mesmos internamente.
 * 
    Iterator extends Traversable {
        //Métodos
        abstract public current(): mixed Retorna o elemento atual
        abstract public key(): mixed Retorna a chave do elemento atual
        abstract public next(): void Avançar para o próximo elemento
        abstract public rewind(): void Retrocede o Iterator para o primeiro elemento
        abstract public valid(): bool Verifica se a posição atual é válida
    }

*/

//definição da classe MyIterator que implementa a interface Iterator e seus respectivos metodos abstratos
class MyIterator implements Iterator{

    //propriedade da classe, com visibilidade privada, somente a classe declarante pode acessar
    private $var = array();

    //define um construtor para a classe, com um paramentro obrigatorio
    public function __construct($array) {
        //se a variavel passada por paramentro for um array
        if(is_array($array)) {
            $this->var = $array;
        }
    }

    //IMPLEMENTANDO METODOS DA INTERFACE
    
    public function rewind() {
        echo "rewinding </br>";
        //redefine o cursor ponteiro do array para o primeiro elemento
        reset($this->var);
    }

    public function current() {
        //retorna o elemento atual de um array
        $var = current($this->var);
        echo "current: $var </br>";
        return $var;
    }

    public function key() {
        //pega uma chave do array
        $var = key($this->var);
        echo "Key: $var </br>";
        return $var;
    }

    public function next() {
        //avança o ponteiro do array para o proximo elemento do array
        $var = next($this->var);
        echo "next: $var </br>";
        return $var;
    }

    public function valid() {
        //pega uma chave no array
        $key = key($this->var);
        //se a chave obtida for diferente de NULL e se e diferente de false
        //a chave existe, e uma chave valida 
        $var = ($key !== NULL && $key !== FALSE);
        echo "valid: $var </br>";
        return $var;
    }
}

//cria um array com 4 elementos
$values = array(1, 2, 3, 4);

//cria uma instancia de objeto da class, passando o paramentro para o construtor
$it = new MyIterator($values);

//itera sobre os valores passado no construtor do objeto
foreach($it as $a => $b) {
    print "$a : $b </br>";
}



?>