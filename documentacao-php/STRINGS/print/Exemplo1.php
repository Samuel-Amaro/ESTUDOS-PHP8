<?php 

/**
 * * EXEMPLO #1 EXEMPLOS print
 * 
 *  
*/

//mostra uma string e retorna 1
$return = print("Ola Mundo.<br/>");
if($return) {
   print("O print ola mundo retornou $return <br/>"); 
}

print "print() também funciona sem parênteses. <br/>";

print "Isso abrange <br/>
várias linhas. As novas linhas serão <br/>
saída também <br/>";

print "Isso abrange \n <br/> várias linhas. As novas linhas também serão \n <br/> produzidas.";

print "o escape de caracteres é feito \"Assim\". <br/>";

//Você pode usar variáveis ​​dentro de uma instrução de print
$foo = "foobar";
$bar = "barbaz";

print "foo e $foo <br/>"; //foo e foobar

//você pode usar arrays também com intrução print
$bar = array("value" => "foo");
print "Este e {$bar['value']} !<br/>"; //este e foo!

//O uso de aspas simples imprimirá o nome da variável, não o valor
print 'foo e $foo <br/>'; //foo is $foo

//Se você não estiver usando nenhum outro caractere, você pode apenas imprimir as variáveis
print $foo . "<br/>"; //foobar

print <<<END
Isso usa a sintaxe "aqui documento" para a saída múltiplas linhas com $foo interpolação. Observação que o terminador aqui do documento deve aparecer em um
linha com apenas um ponto-e-vírgula sem espaço em branco extra!
END;

/**
 * * NOTAS 
 * 
 * Nota: Este é um construtor de linguagem e não uma função, por isso não é possível chamá-lo através de funções variáveis
*/


?>