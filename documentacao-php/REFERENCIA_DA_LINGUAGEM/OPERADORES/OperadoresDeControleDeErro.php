<?php 

/**
 * * OPERADORES DE CONTROLE DE ERRO
 * 
 * O PHP suporta um operador de controle de erro: o sinal 'arroba' (@). Quando ele precede uma expressão em PHP, qualquer mensagem de erro que possa ser gerada por aquela expressão será ignorada.
 * 
 * Se você configurar uma função personalizada de manipulação de erros com set_error_handler() ela será chamada, mas esta função personalizada pode (e deve) chamar error_reporting() que irá retornar 0 quando o erro disparado tiver sido precedido por uma @.
 * 
 * Se o recurso track_errors estiver habilitado, qualquer mensagem de erro gerada pela expressão será gravada na variável $php_errormsg. Esta variável será sobrescrita em cada erro, assim verifique-a constantemente se você quiser usá-la.
*/

/*ERRO DE ARQUIVO INTENCIONAL*/
$my_file = @file('arquivo_nao_existente') or die("Falha abrindo arquivo: '$php_errormsg'");

//Isto funciona para qualquer expressão, não apenas para funções:
$value = @$cache[$key];

//você não receberá nenhum aviso se a chave $key não existir.

/**
 * Nota: O operador @ funciona somente em expressões. Uma regra simples para lembrar disso: se você pode pegar o valor de alguma coisa, você pode prefixar isso com o @. Assim, você pode prefixar chamadas de variáveis, funções e includes, constantes e afins. Você não pode prefixar definições de funções ou classe, estruturas condicionais como o if, foreach e assim por diante. 
 * 
 * Aviso Atualmente, o operador de controle de erro "@" sempre desativa mensagens de erro, mesmo para erros críticos, que terminam a execução de scripts. Além de outras coisas, isto significa que se você usar "@" para suprimir erros de certas funções e elas não estiverem disponíveis ou com tipos incorretos, o script vai parar exatamente aí sem nenhuma indicação da razão.
*/
?>