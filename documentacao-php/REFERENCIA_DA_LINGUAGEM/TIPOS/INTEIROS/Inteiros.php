<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inteiros</title>
</head>
<body>
    <h1>Inteiros</h1>
    <!-- literias inteiras -->
    <?php

        /**
         * * INTEIROS
         * 
         * Um inteiro é um número do conjunto ℤ = {..., -2, -1, 0, 1, 2, ...}.
         * 
         * * SINTAXE:
         * 
         * Inteiros podem ser especificados em notação decimal (base 10), hexadecimal (base 16), octal (base 8) ou binária (base 2). O operador de negação pode ser usado para indicar um inteiro negativo.
         * 
         * Inteiros binários literais estão disponíveis a partir do PHP 5.4.0.
         * 
         * Para usar a notação octal, preceda o número com um 0 (zero). Para utilizar a notação hexadecimal, preceda o número com 0x. Para utilizar a notação binária, preceda o número com 0b.
         * 
         * A partir do PHP 7.4.0, inteiros literais podem conter sublinhados (_) entre os dígitos, para melhorar a sua leitura. Estes sublinhados serão removidos pelo scanner do PHP.
        */

        //Exemplo #1 Literais inteiras

        $a = 1234; // número decimal
        $a = 0123; // número octal (equivalente a 83 em decimal)
        $a = 0x1A; // número hexadecimal (equivalente a 26 em decimal)
        $a = 0b11111111; // número binário (equivalente ao 255 decimal)
        $a = 1_234_567; // decimal number (as of PHP 7.4.0)

       
    ?>
</body>
</html>