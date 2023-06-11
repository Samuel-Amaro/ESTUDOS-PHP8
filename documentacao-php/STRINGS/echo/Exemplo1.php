<?php 

/**
 * * EXEMPLO #1 ECHO EXEMPLOS
 *  
*/


//exibe uma string
echo "Hello World <br/>";

//exibe um string de varias linhas
echo "Isso abrange
várias linhas. As novas linhas serão
saída também <br/>";

//exibe uma string com caracteres de escape de quebra de linha
echo "Isso abrange <br/> várias linhas. As novas linhas também serão <br/> produzidas.<br/>";

//exibe uma string com caracteres de escape 
echo "O escape de caracteres é feito \"Assim \". <br/>";

//Você pode usar variáveis ​​dentro de uma instrução echo
$foo = "foobar";
$bar = "bazbaz";

//exibe uma string que e composta por variaveis
echo "foo e $foo <br/>"; //foo e foobar

//Você também pode usar arrays, declara um array que contem um elemento, que possui uma chave e um valor
$baz = array("value" => "foo");

//exibe uma string composta pelo array
echo "Este e {$baz['value']} ! <br/>"; //este e foo!

//O uso de aspas simples imprimirá o nome da variável, não o valor
echo 'foo is $foo' . "<br/>"; //foo is $foo;

//Se você não estiver usando nenhum outro caractere, você pode apenas ecoar variáveis
echo $foo . "<br/>"; //foobar
echo $foo, $bar . "<br/>"; //foobarbarbaz

//Algumas pessoas preferem passar vários parâmetros para eco em vez de concatenação.
echo 'Esta ', 'string ', 'foi ', 'feito ', 'com vários parâmetros.', chr(10); 
//utilizando concatenação para passar varias strings
echo 'Esta ' . 'string ' . 'foi ' . 'feito ' . 'com concatenação.' . "<br/>";

echo <<<END
Isso usa a sintaxe "aqui documento" para a saída múltiplas linhas com $foo interpolação. Observação que o terminador aqui do documento deve aparecer em um
linha com apenas um ponto e vírgula. nenhum espaço em branco extra!
END;

//Como echo não se comporta como uma função, o código a seguir é inválido.
$algum_var = true;
//($algum_var) ? echo 'true' : echo 'false';

//No entanto, os exemplos a seguir funcionarão:
($algum_var) ? print 'true' . "<br/>" : print 'false' . "<br/>"; 
//print também é uma construtor, mas
//se comporta como uma função, então
//pode ser usado neste contexto.

//mudando a declaração ao redor
echo $algum_var ? 'true' . "<br/>" : 'false' . "<br/>";

/**
 * * NOTAS
 * 
 *  Nota: Este é um construtor de linguagem e não uma função, por isso não é possível chamá-lo através de funções variáveis
*/
?>