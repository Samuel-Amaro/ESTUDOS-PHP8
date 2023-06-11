<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratando Formulários</title>
</head>
<body>

    <h1>Tratando Formulários</h1>

    <!--
      * Uma das características mais fortes do PHP é o jeito como ele trata formulários HTML. O conceito básico que é importante entender é que qualquer elemento de formulário irá automaticamente ficar disponível para seus scripts PHP.
      * Exemplo #1 Um simples formulário HTML
    -->

    <form action="action.php" method="post">
        <label for="nome">Seu Nome:</label>
        <input type="text" name="nome"/>
        <br>
        <label for="idade">Sua Idade:</label>
        <input type="text" name="idade"/>
        <br>
        <input type="submit" value="Enviar">
    </form>
    
    <!--
        * Não há nada de especial neste formulário. É um formulário HTML comum sem nenhuma tag especial de qualquer tipo. Quando o usuário preencher este formulário e clicar no botão enviar, a página action.php é chamada. Neste arquivo nós teremos algo como isto:
    -->
</body>
</html>