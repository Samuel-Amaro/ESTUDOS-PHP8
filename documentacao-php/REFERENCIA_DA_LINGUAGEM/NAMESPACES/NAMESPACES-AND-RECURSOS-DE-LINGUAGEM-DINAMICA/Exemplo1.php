<?php 

/**
 * * EXEMPLO #1 DYNAMICALLY ACCESSING ELEMENTS(ACESSANDO ELEMENTOS DINAMICAMENTE)
 *  
*/

//declaração de uma classe
class classname{
    //metodo construtuor da classe, sem paramentros obrigatorio para inicialização
    function __construct() {
        //O nome do método da classe. 
        echo __METHOD__, "</br>";
    }
}

//declaração e implementação de uma função
function funcname() {
    //retorna o nome da função declarada
    echo __FUNCTION__, "</br>";
}

//declaração de uma constante
const constname = "global";
//armazena uma string com o nome da classe
$a = 'classname';
//instanciando um novo objeto usando, usando recurso de linguagem dinamica no php, isso e não vou precisar digitar o nome da classe, automaticamente o php interpretara o $a como a string com o nome da classe, ao instancia o novo objeto o php interpretara a variavel $a como o nome da classe
$obj = new $a; //imprime classname::__construct
//variavel que armazena uma string com o nome de uma função
$b = 'funcname';
//mesma coisa, usando o recurso da linguagem dinamica do php, a variavel $b contem o nome da função, isso e quando vou chamar a função so especificar a variavel que contenha o nome da função, o php interpreta automaticamente
$b(); //imprime funcname
$valorConstante = constant('constname');
if(is_null($valorConstante)) {
    echo "Não foi definido valor na constante! </br>";    
}else{
    echo constant('constname'), "</br>"; //imprime global
}


/**
 *  Deve-se usar o nome totalmente qualificado (nome da classe com prefixo de namespace). Observe que, como não há diferença entre um Nome qualificado e um totalmente qualificado dentro de um nome de classe dinâmico, nome de função ou nome de constante, a barra invertida inicial não é necessária.
*/

?>