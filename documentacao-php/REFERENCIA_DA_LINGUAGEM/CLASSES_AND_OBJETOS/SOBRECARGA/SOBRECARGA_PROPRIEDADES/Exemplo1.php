<?php 

/**
 * * EXEMPLO #1 SOBRECARREGANDO PROPRIEDADES COM __get(), __set(), __isset() and __unset()
 * 
 *  
*/

//definição da classe chamada PropriedadeTest
class PropertyTest{

    //Local para dados sobrecarregados.
    //propriedade da classe com visibilidade privada somente a classe que declarou acessa
    private $data = array();

    //Sobrecarga não usada nas propriedades declaradas.
    //propriedade da classe com visibilidade publica
    public $declared = 1;

    //propriedade da classe com visibilidade privada
    //Sobrecarga usada apenas quando acessada fora da classe
    private $hidden = 2;

    /**
     * __set() é executado ao escrever dados em propriedades inacessíveis. 
     * 
     * O argumento $name é o nome da propriedade com o qual set está interagindo. O argumento $value do método __set() especifica o valor para o qual a propriedade $name deveria ser definida.
    */
    public function __set($name, $value) {
        echo "__set() '$name' para '$value' </br>";
        //seta o par (chave/valor) da propriedade como um item no array
        $this->data[$name] = $value;
    }

    /**
     * __get() é utilizado para ler dados de propriedades inacessíveis.
     * 
     * $name -> nome da propriedade que esta tentando acessar 
    */
    public function __get($name) {
        echo "__get() '$name' </br>";
        //se exisitir uma chave com a $name propriedade, no array data 
        if(array_key_exists($name, $this->data)) {
            //retorna o valor da propriedade que possui a chave $name
            return $this->data[$name];
        }

        //se não existir uma propriedade como $name chave no array lança um erro
        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): '.$name .' in '.$trace[0]['file'].'on line '.$trace[0]['line'], 
            E_USER_NOTICE
        );
        return null;
    }

    /**
     *  __isset() é disparado ao chamar a função isset() ou empty() em propriedades inacessíveis. 
     * 
     * $name -> e o nome da propriedade inacessivel
    */
    public function __isset($name) {
        echo "Is '$name' __isset() </br>";
        //retorna true se a variavel existe,
        //retorna false se a variavel não existe
        return isset($this->data[$name]);
    }

    /**
     * é invocado ao usar o construtor unset() em propriedades inacessíveis.
     * 
     * A PARTIR DO PHP 5.1.0 
    */
    public function __unset($name) {
        echo "__unset() '$name' </br>";
        //retorna uma variavel destruida
        unset($this->data[$name]);
    }

    /** Não é um método mágico, apenas aqui, por exemplo. */
    public function getHidden() {
        return $this->hidden;
    }
}

echo "<pre> </br>";

//cria uma nova instancia de objeto da class
$obj = new PropertyTest;

//chamando uma propriedade que não existe no objeto
//essa propriedade vai ser criada no contexto desse objeto, so vai existir para esse objeto
//chama __set() -> escrevendo dados em uma propriedade inacesiivel
$obj->a = 1;


//chama __get() porque tentar ler dado de uma propriedade inacessivel e inexistente
echo $obj->a . "</br>";

//verifica se a propriedade e diferente de null e mostra informações sobre ela
//chama o metodo __isset() definido na classe, porque esta usando a função isset() em uma propriedade inacessivel
var_dump(isset($obj->a));

//desconfigura a propriedade a
//e chama o metodo definido na classe
//__iset() -> porque tenta usar o construtor unset() em propriedade inacessivel
unset($obj->a);

//verifica se a propriedade e diferente de null e mostra informações sobre ela
//chama o metodo __isset() definido na classe, porque esta usando a função isset() em uma propriedade inacessivel
var_dump(isset($obj->a));

echo "</br>";

//acessa a propriedade normalmente
echo "Propriedade declared que ja existe: " . $obj->declared . "</br> </br>";

echo "Vamos experimentar a propriedade privada chamada 'hidden': </br>";

echo "Os privados são visíveis dentro da classe, portanto __get () não é usado ... </br>";

//chama o metodo da classe
echo "Mostrando propriedade que e privada por meio de seu metodo acessor obj->getHidden: " . $obj->getHidden() . "</br>";

echo "Privados não visíveis fora da classe, então __get () é usado ... </br>";

//isso gerara um erro porque propriedade e privada
//e não tem como acessala diretamente
//so por meio de um metodo acessor definido
echo $obj->hidden . "</br>";

?>