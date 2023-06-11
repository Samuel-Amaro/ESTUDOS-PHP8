<?php 

/**
 * * OPERADORES DE INCREMENTO/DECREMENTO 
 * 
 * O PHP suporta operadores de pré e pós-incremento e decremento no estilo C.
 * 
 * Nota: Os operadores incremento/decremento afetam apenas números e strings. Arrays, objetos e recursos não são afetados. Decrementar null não gera efeitos, mas incrementar resulta em 1.
 
    EXEMPLO: ++$a;
    NOME: PRÉ-INCREMENTO;
    EFEITO: INCREMENTA $a em um, e então retorna $a.

    EXEMPLO: $a++;
    NOME: PÓS-INCREMENTO;
    EFEITO: retorna $a, e então incrementa $a em um.

    EXEMPLO: --$a;
    NOME: PRÉ-DECREMENTO;
    EFEITO: Decrementa $a em um, e então retorna $a.

    EXEMPLO: $a--;
    NOME: PÓS-DECREMENTO;
    EFEITO: Retorna $a, e então decrementa $a em um.

 * 
 * Aqui está um script de exemplo simples:
*/

//retorna $a e então incrementa $a em um
echo "<h3>Pós-incremento</h3>";
$a = 5;
echo "Deve ser 5: " . $a++ . "<br />\n";
echo "Deve ser 6: " . $a . "<br />\n";

//INCREMENTA $a em um, e então retorna $a.
echo "<h3>Pré-incremento</h3>";
$a = 5;
echo "Deve ser 6: " . ++$a . "<br />\n";
echo "Deve ser 6: " . $a . "<br />\n";

//Retorna $a, e então decrementa $a em um
echo "<h3>Pós-decremento</h3>";
$a = 5;
echo "Deve ser 5: " . $a-- . "<br />\n";
echo "Deve ser 4: " . $a . "<br />\n";

//Decrementa $a em um, e então retorna $a
echo "<h3>Pré-decremento</h3>";
$a = 5;
echo "Deve ser 4: " . --$a . "<br />\n";
echo "Deve ser 4: " . $a . "<br />\n";

/**
 * O PHP segue a convenção Perl quando tratando operações aritmétricas em variavéis caracter em vez da convenção C. Por exemplo, em Perl $a = 'Z'; $a++; transforma $a em 'AA' enquanto que em C a = 'Z'; a++; transforma a em '[' (valor ASCII de 'Z' é 90, valor ASCII '[' é 91). Note que variáveis caracter podem ser incrementadas mas não decrementadas e somente caracteres plain ASCII (a-z e A-Z) são suportados. Incrementar ou decrementar outros caracteres não tem efeitos, a string original não sendo modificada.
 * 
 *  Exemplo #1 Operações aritmétricas em variáveis caractere
*/

echo '== Alphabets ==' . PHP_EOL;
$s = 'W';
for($n = 0; $n < 6; $n++) {
    echo ++$s . PHP_EOL;
}

//Caracteres de dígitos se comportam de maneira diferente
echo '== Digits ==' . PHP_EOL;
$d = 'A8';
for($n = 0; $n < 6; $n++) {
    echo ++$d . PHP_EOL;
}
$d = 'A08';
for($n = 0; $n < 6; $n++) {
    echo ++$d . PHP_EOL;
}

/**
 * Incrementar ou decrementar booleanos não há efeito. 
*/

?>