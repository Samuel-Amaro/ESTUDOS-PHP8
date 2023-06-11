<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escapando HTML</title>
</head>
<body>
    <!-- Tudo o que estiver fora das tags PHP é ignorado pelo interpretador, o que permite arquivos PHP de conteúdo misto. Permite que o PHP seja incluído dentro de documentos HTML, para, por exemplo, a criação de templates.-->

    <p>Isto vai ser ignorado pelo PHP e exibido pelo navegador.</p>
    <?php echo 'Enquanto isto vai ser interpretado.'; ?>
    <p>Isto também vai ser ignorado pelo PHP e exibido no navegador.</p>

    <!-- exemplo : escape avançado usando condições
    <?php if ($expression == true): ?>
        Isto irá aparecer se a expressão for verdadeira.
    <?php else: ?>
        Senão isso que aparecerá.
    <?php endif; ?>
     -->

    <!--
        - Nesse exemplo o PHP irá pular os blocos em que a condição não seja satisfeita, mesmo que o trecho de código esteja fora das tags de abertura/fechamento do PHP, pois o interpretador do PHP irá pular os conteúdos de blocos que não possuem uma condição que não foi satisfeita.

        - Para impressão de grandes blocos de texto, sair do modo de interpretação do PHP é geralmente mais eficiente que enviar todo o texto através das funções echo ou print

        - Nota: Se o PHP for incluído no XML ou XHTML, as tags normais <?php ?> precisam ser utilizadas para que o documento permaneca conformante aos padrões desses documentos.
    -->

</body>
</html>