<?php 

//INLCUINDO O ARQUIVO ONDE ESTA A DEFINIÇÃO DE CLASSE
include("../CLASS/Exemplo1DefinicaoSimplesDeUmaClasse.php");

/**
 * * EXEMPLO #4 ATRIBUIÇÃO DE OBJETOS
 * 
 *  
*/

//cria uma nova instancia da class SimpleClass
$instancia = new SimpleClass();

//atribui a instancia da simple class a variavel atribuida
//atribuida vai possuir a copia de instancia
$atribuida = $instancia;

//a variavel referencia tem a referencia da instancia da SimpleClass
//vai manipular diretamente instancia por meio da variavel referencia
$referencia = &$instancia;

//a propriedade var da variavel instancia que e uma instancia de SimpleClass vai ter o seguinte valor
$instancia->var = '$atribuida terá esse valor';

$instancia = null; //$instance e $refrence tornam-se nulos

//mixed(misturado) -> qualquer valor, qualquer tipo
//var_dump(mixed $expression, mixed $expression = ?, $... = ?): void
//expression - A variável que você quer exportar.
//var_dump — Mostra informações sobre a variável
//Esta função mostrará uma representação estruturada sobre uma ou mais expressões, incluindo o tipo e o valor. Arrays e objetos são explorados recursivamente com valores identados na estrutura mostrada.
//No PHP 5 todas propriedades public, private e protected do objeto são retornados na saída.

var_dump($instancia); //NULL
var_dump($referencia); //NULL
var_dump($atribuida); //object (SimpleClass) # 1 (1) {["var"] => string (27) "$ atribuida terá esse valor"}

?>