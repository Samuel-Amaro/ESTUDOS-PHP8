<?php

/*
* 
* * Valores padrão de argumentos 
* 
*  Uma função pode definir valores padrão no estilo C++ para argumentos escalares, como a seguir:
* 
* Exemplo #5 Utilizando parâmetros padrão em funções
*/

function fazerCafe($type = "cappuccino") {
   return "Fazendo uma xícara de café $type. \n";
}

echo fazerCafe(); //cappucino valor padrão do arg
echo fazerCafe(null); //null
echo fazerCafe("espresso");

/**
 * O PHP também permite o uso def arrays e do tipo especial null como valores padrões, por exemplo: 
*/

//Exemplo #6 Usando tipos não escalares como valores padrões

function fazerCafe($types = array("cappuccino"), $maquinaCafe = NULL) {
   $dispositivo = is_null($maquinaCafe) ? "maõs" : $maquinaCafe;
   return "Fazendo uma xicara de ".join(", ", $types)."with $dispositivo .\n";
}

echo fazerCafe();
echo fazerCafe(array("cappuccino", "lavazza"), "teapot");

/**
 * O valor padrão precisa ser uma expressão constante, não (por exemplo) uma variável, um membro de classe ou uma chamada de função.
 * 
 *  Note que usando argumentos padrão, qualquer padrão deve vir após os argumentos sem padrão: caso contrário, as coisas não funcionarão como esperado. Considere o seguinte trecho de código:
 * 
 * Exemplo #7 Uso incorreto de parâmetros padrão de função
*/

function iogurtera($tipo = "azeda", $sabor) {
   return "Fazendo uma taça de $sabor $tipo. \n";
}

echo iogurtera("framboesa"); //não funciona como esperado

/**
 * Agora, compare o que está acima com este:
 * 
 *  Exemplo #8 Uso correto de parâmetros padrão de função
*/

function iogurtera($sabor, $tipo = "azeda") {
   return "Fazendo uma taça de $sabor $tipo .\n";
}

echo iogurtera("framboesa"); //funciona

/**
 * Nota: Argumentos passados por referência podem ter um valor padrão.
 * 
 * * NÚMERO VARIÁVEL DE ARGUMENTOS
 * 
 *  O PHP suporta argumentos em quantidade variável em funções definidas pelo usuário, utilizando o token ....
*/
?>