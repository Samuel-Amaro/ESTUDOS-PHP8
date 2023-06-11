<?php

/**
 * * NOTA: Antes do PHP 7.1.0, era possível obter argumentos anuláveis ​​criando nullo valor padrão. Isso não é recomendado, pois é interrompido durante a herança.
 * 
 * * EXEMPLO #7 MANEIRA ANTIGA DE TORNAR OS ARGUMENTOS ANULÁVEIS
 * 
 * 
*/

//cria uma class
class C{}

//cria uma função que possui um paramentro obrigatorio do tipo da class C, mas que possui uma valor padrão null
function f(C $c = null) {
    var_dump($c);
}

//passa um objeto do tipo C
f(new C);
//passa um valor null
f(null);

?>