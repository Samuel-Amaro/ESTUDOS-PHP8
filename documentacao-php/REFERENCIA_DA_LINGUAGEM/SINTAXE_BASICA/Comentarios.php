<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios PHP</title>
</head>
<body>
    
    <h1>Comentarios Em PHP</h1>

    <!-- O PHP suporta comentários no estilo 'C', 'C++' e do Unix shell (estilo Perl). Por exemplo: -->

    <?php
        echo 'Isto é um teste'; // Estilo de comentário de uma linha em  C++
        /* Este é um comentário de múltiplas linhas
       ainda outra linha de comentário */
        echo 'Isto é ainda outro teste';
        echo 'Um teste final'; # Este é um comentário de uma linha no estilo shell
    ?>

    <h1>Isto é um <?php # echo 'simples';?> exemplo.</h1>
    
    <p>O cabeçalho acima irá dizer 'Isto é um exemplo'.</p>

    <?php
        /*
            echo 'Isto é um teste'; /* Este comentário irá causar um problema */
        //*/
    ?>
</body>
</html>