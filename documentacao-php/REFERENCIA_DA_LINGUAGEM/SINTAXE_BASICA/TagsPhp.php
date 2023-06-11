<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tags PHP</title>
</head>
<body>
    <!-- 
       * * TAGS PHP

         - Quando o PHP interpreta um arquivo ele procura pelas tags de abertura e fechamento, <?php e ?>, que dizem ao PHP para iniciar ou parar a interpretação do código entre elas. A interpretação assim permite ao PHP ser incluído em vários tipos de documentos, pois tudo que está fora destas tags é ignorado pelo interpretador do PHP.

         - PHP inclui uma tag curta echo; <?=?> que é uma forma abreviada mais verbosa para <?php?>
    -->
    <h1>Tags PHP</h1>

    <!--Exemplo abrindo e fechando tags PHP-->
    
    <? php echo 'se você deseja rodar código PHP dentro de documentos XHTML ou XML, utilize essas tags'; ?>

    <!-- Você pode utilizar a tag curta-->
    <?= 'imprima essa string <br>' ?>

    <!-- e o equivalente de -->
    <?php echo 'print this string' ?>

    <!--
        - Nota: Como as tags curtas podem ser desabilitadas, é recomendável usar apenas as tags normais (<?php ?> and <?= ?>) para maximizar a compatibilidade.

        - Se um arquivo for código PHP puro, é preferível omitir a tag de fechamento no final do arquivo. Prevenindo a existência de espaços ou linhas em branco após a tag, que podem causar efeitos indesejáveis, por que o PHP iniciará o buffer de saída quando não existir intenção do programador de enviar alguma saída neste ponto do script.
    -->

    <?php

        echo "Hello World";

        // ... mais código

        echo "Ultima instrução";

        // o script termina aqui, sem tag de fechamento PHP
</body>
</html>