<?php

/**
 * * NÚMEROS DE PONTO FLUTUANTE
 * 
 * Números de ponto flutuante (também conhecidos como "floats", "doubles" ou "números reais"), podem ser especificados utilizando qualquer uma das seguintes sintaxes:
*/

$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
$d = 1_234.567; //a partir do php 7.4.0

/**
 * O tamanho de um número de ponto flutuante depende da plataforma, sendo o máximo de ~1.8e308 com precisão de 14 dígitos decimais um valor comum (número de 64 bits no formato IEEE). 
 * 
 * Então, nunca confie em resultados com números de ponto flutuante até a última casa, e nunca compare números de ponto flutuante em igualdades. 
 * 
 * * CONVERTENDO PARA FLOAT
 * 
 * Para informações sobre a conversão de strings para float, veja a seção Conversão de Strings para números. Para valores de outros tipos, o valor é primeiro convertido para inteiro e então para float. Veja a seção Convertendo para inteiros para mais informações. No PHP 5, um aviso é emitido se você tentar converter um object para um float.
 * 
 * * COMPARANDO FLOATS
 * 
 * Como notado acima, testar números de ponto flutuante com igualdade é problemático, por causa da maneira como são representados internamente. Entretanto existem maneiras de fazer comparações com números de ponto flutuante que contornam essas limitações.
 * 
 * Para testar números de ponto flutuante, utilize um "valor de erro máximo" na comparação utilizada. Esse valor é também chamado de epsilon, ou unidade de erro, e deve ser a diferença mínima aceitável no resultado dos cálculos.
 * 
*/

//$a e $b serão consideradas iguais até o 5º dígito de precisão.

$numero1 = 1.23456789;
$numero2 = 1.23456780;
$epsilon = 0.00001;

//Valor absoluto é o valor próprio do algarismo, independentemente do lugar que ocupa no número. Por exemplo, em 257, o valor absoluto do 7 é 7; do 5, 5; e do 2, 2.
if(abs($a-$b) < $epsilon) {
    echo "iguais";
}

/**
 * * NaN
 * 
 *  Algumas operações numéricas podem resultar em valores representados pela constante NAN. Esse resultado representa um valor desconhecido ou não representável nos cálculos de ponto flutuante. Qualquer comparação frouxa ou restrita deste valor com qualquer outro, inclusive ele mesmo, terá como resultado false.
 * 
 * Como o NAN representa um resultado irrepresentável, NAN não deve ser comparado com outros valores, incluindo ele mesmo, em vez disso, deve-se checá-lo utilizando a função is_nan() - e_nan().
*/
?>