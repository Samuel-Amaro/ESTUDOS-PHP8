<?php

/**
 * * EXEMPLO #2 ACESSANDO DINAMICAMENTE OS ELEMENTOS COM NAMESPACE
 *  
*/

//declarando um namespace(um espaço de nomes reservado nesse script, para funções, classes, constantes)
namespace namespacename;

//declaração de classe
class classname{
    //declarando um metodo construtor, da classe, sem parametros obrigatorios na inicialização, de uma objeto
    function __construct() {
        //ao instancia um objeto, vai imprimir
        //O nome do método construtor da classe.
        echo __METHOD__, "</br";
    }
}

//declaração e implementação de uma função, sem paramentros obrigatorios
function funcname() {
    //ao chamar a função vai imprimir, o nome dessa função
    echo __FUNCTION__, "</br>";
}

//declaração de uma constante
const constname = "namespaced";

/*note que se estiver usando aspas duplas, "\\ namespacename \\ classname" deve ser usado
*/

//a variavel $a armazena uma string que acessa a hierarquia de namespace para acessar o nome reservado de uma classe, usando nome totalmente qualificado(que e o caminho absoluto do namespace até o name)
$a = '\namespacename\classname';

//instanciando um novo objeto, usando o recurso de linguagem dinamica de interpretaçaõ do php, isso e ao especificar a variavel $a o php interpretara que estou acessando o nome reservado de uma classe na hierarquia de namespace
$obj = new $a; //imprime namespacename\classname::__construct

//a variavel $a armazena uma string que acessa a hierarquia de namespace para acessar o nome reservado de uma classe, usando o espaço de nome qualificado sem o prefixo da barra inicial invertida, antes do nome do namespace
$a = 'namespacename\classname';

//instanciando um novo objeto, usando o recurso de linguagem dinamica de interpretaçaõ do php, isso e ao especificar a variavel $a o php interpretara que estou acessando o nome reservado de uma classe na hierarquia de namespace, usando um nome qualificado
$obj = new $a; //também imprime namespacename \ classname :: __ construct, so por causa que estamos dentro de um ambiente dinamico de classe

//espaço de nome qualificado, para acessar um nome reservado de uma função dentro de um namespace
$b = 'namespacename\funcname';

//usando o recurso da interpretação dinamica do php, ao especificar a variavel $b na frente dos parenteses o php intepretara, a variavel $b como o nome qualificado para acessar o nome reservado da função dentro do espaço de nomes
$b(); //imprime namespacename\funcname;

//espaco de nome totalmente qualificado, isso e o caminho absoluto ate o nome reservado dentro da hierarquia do namespace
$b = '\namespacename\funcname';
$b(); //também imprime namespacename\funcname

//informa um namespace totaltamente qualificado para acessar o nome reservado da constante
echo constant('\namespacename\constname'), "</br>"; //imprime namespaced, que e o valor da constante

//informa um namespace  qualificado para acessar o nome reservado da constante
echo constant('namespacename\constname'), "</br>"; //também imprime namespaced, que e o valor da constante

?>