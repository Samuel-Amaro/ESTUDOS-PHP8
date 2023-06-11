<?php 

/**
 * * DESTRUTOR 

     __destruct(): void

 * O PHP introduz um conceito de destrutor similar ao de outras linguagens orientadas a objeto, como C++. O método destrutor será chamado assim que todas as referências a um objeto particular forem removidas ou quando o objeto for explicitamente destruído ou qualquer ordem na sequência de encerramento.
 * 
 * * EXEMPLO #5 EXEMPLO DE DESTRUTOR
 * 
*/

//definição de uma classe Chamada MyDestructableClass
class MyDestructableClass{
    //definindo um metodo construtor sem parametros obrigatorios na instanciação do objeto
    function __construct() {
        print "No constructor </br>";
    }

    //definindo um metodo destrutor do objeto
    //destroi o objeto que esta sendo referenciado explicitamente
    function __destruct() {
        print "Destroindo " . __CLASS__ . "</br>";
    }
}

//instanciando um objeto da class MyDestructableClass
//automaticamente ele e criado, e logo em seguida e destruido 
//por conta do metodo construtor e destrutor
$obj = new MyDestructableClass();

/**
 * Assim como os construtores, os destrutores da classe pai não serão chamados implicitamente pelo PHP. Para executar o destrutor pai, deve-se fazer uma chamada explícita a parent::__destruct() no corpo do destrutor. Assim como construtores, uma classe filha pode herdar o destrutor caso não implemente um.
 * 
 *  O destrutor será chamado mesmo se o script for terminado utilizando-se exit(). Chamar exit() em um destrutor irá impedir que as demais rotinas de encerramento executem.
 * 
 * Nota: Destrutores chamados durante o encerramento da execução do script já enviaram os cabeçalhos HTTP. O diretório atual na fase de encerramento do script pode ser diferente em alguns SAPIs (e.g. Apache).
 * 
 * Nota: Tentar disparar uma exceção em um destrutor (chamado no término do script), lançará um erro fatal.
*/
?>