<?php 

/**
 * * TIPO ANULÁVEL (Nullable type)
 * 
 *  A partir do PHP 7.1.0, as declarações de tipo podem ser marcadas como anuláveis ​​prefixando o nome do tipo com um ponto de interrogação ( ?). Isso significa que o valor pode ser do tipo especificado ou null.
 * 
 * * EXEMPLO #5 DECLARAÇÃO DE TIPO DE ARGUMENTO ANULÁVEL
 * 
*/

//declaração da class C
class C{}

//declaração da função f que tem o paramentro obrigatorio do tipo da class C ou pode ser null devido ao ponto de interrogação
function f(?C $c) {
    //mostra informações sobre a variavel
    var_dump($c);
}

//passando parametro para  função do tipo C
f(new C);
//passando uma valo null para a função
f(null); 
?>