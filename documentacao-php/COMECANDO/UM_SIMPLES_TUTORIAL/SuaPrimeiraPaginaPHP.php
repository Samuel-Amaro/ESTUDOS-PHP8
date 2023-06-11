<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira Página</title>
</head>
<body>
    
    <h1>Sua Primeira página PHP</h1>

    <?php
    
        //Exemplo #1 Nosso primeiro script PHP: ola.php

        echo "<p>Olá Mundo</p>";

        /**
         * Este programa é realmente simples e você não precisa do PHP para criar uma página assim (fixa). Tudo o que ela faz é mostrar: Hello World utilizando a instrução echo. Note que o arquivo não precisa ser executável ou especial. O servidor web descobre que este arquivo precisa ser interpretado pelo PHP por causa da extensão ".php", que o servidor é configurado para repassar ao PHP. Pense nisso como um arquivo HTML normal que por acaso possui um conjunto de tags especiais disponíveis para você fazer muitas coisas interessantes. 
         * 
         * O objetivo do exemplo é mostrar o formato especial das tags do PHP. Neste exemplo nós usamos <?php para indicar que a partir daquele ponto entramos no modo PHP. Então nós colocamos a instrução do PHP e saímos do modo PHP adicionando a tag de fechamento, ?>. Você pode entrar e sair do modo PHP num arquivo HTML desta maneira em qualquer lugar que você queira.
         * 
         * Agora que você criou com sucesso um script simples em PHP, é hora de criar o mais famoso dos scripts PHP! Uma chamada à função phpinfo() e você verá muitas informações úteis sobre seu sistema e configurações como as Variáveis Predefinidas disponíveis, módulos carregados pelo PHP, e as opções de configuração. 
        */

        //Exemplo #2 Como obter informações sobre o PHP

        phpinfo();
    ?>
</body>
</html>