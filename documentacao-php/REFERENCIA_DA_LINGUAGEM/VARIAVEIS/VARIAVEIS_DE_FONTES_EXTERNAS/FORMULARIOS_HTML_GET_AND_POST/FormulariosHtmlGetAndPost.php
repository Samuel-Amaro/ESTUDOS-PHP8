<?php

/**
 * * FORMULÁRIOS HTML(GET AND POST)
 * 
 *  Quando um formulário é submetido para um script PHP, a informação deste formulário estará automaticamente disponível ao script. Há algumas maneiras de acessar estas informações, por exemplo:
*/

//Exemplo #1 Um formulário HTML SIMPLES
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário HTML simples</title>
</head>
<body>
    <form action="Exemplo2AcessandoDadosFormularioHtmlViaPost.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="seunome" id="seunome"/>
        <br/>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br/>
        <input type="submit" id="enviar" name="enviar" value="Me Aperte!"/>
    </form>
</body>
</html>