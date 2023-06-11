<?php

/**
 * 
 * O PHP também entende arrays no contexto de variáveis de formulário (veja essa FAQ). Pode-se, por exemplo, agrupar variáveis relacionadas, ou utilizar este recurso para obter valores de um input select múltiplo. Por exemplo, iremos enviar o formulário abaixo para si mesmo, e depois de submetido, mostra os dados:
 * 
 * * EXEMPLO #4 VARIÁVEIS DE FORMULÁRIOS MAIS COMPLEXOS
 * 
 *  
*/

if($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
    <h1>Variáveis de formulários mais complexos</h1>
    <!--formulario e submetido para a propria pagina-->
    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="personal[name]"/>
        <br/>
        <label for="email">Email:</label>
        <input type="text" name="personal[email]"/>
        <br/>
        <label for="cerveja">Cerveja:</label>
        <br/>
        <select multiple name="beer[]" id="selecionaCerveja">
            <option value="antartica">Antartica</option>
            <option value="brahma">Brahma</option>
            <option value="skol">Skol</option>
        </select>
        <br/>
        <input type="submit" value="Enviar Dados!">
    </form>
</body>
</html>