<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime Dados Formulario</title>
</head>
<body>
    
    <h1>Imprimindo dados de nosso formulario</h1>

    Oi <?php echo htmlspecialchars($_POST['nome']); ?>. 
    Tu tens <?php echo (int)$_POST['idade']; ?> anos.

    <!--
        - Para além de htmlspecialchars() e (int), deve ser óbvio o que o script faz. htmlspecialchars() transforma caracteres que sejam especiais no HTML na sua forma codificada, de forma que não seja possível injetar tags HTML ou JavaScript em sua página. O campo age (idade), por ser um número, podemos simplesmente converter para um integer que automaticamente eliminará qualquer caractere estranho. Você também pode fazer o PHP automaticamente fazer isso utilizando a extensão filter. As variáveis $_POST['name'] e $_POST['age'] são criadas automaticamente pelo PHP. Anteriormente utilizamos a superglobal $_SERVER; acima mostramos que a superglobal $_POST contém todos os dados POST. Perceba como o method (método) do formulário é POST. Se fosse utilizado o método GET então os dados do formulário acabariam na superglobal $_GET. Você também pode utilizar a superglobal $_REQUEST, se não se importar qual a origem do dado enviado. Ela conterá os dados mesclados de origens GET, POST e COOKIE

        - Você também pode utilizar XForms no PHP, embora se sinta confortável com os formulários HTML clássicos por um bom tempo. Embora trabalhar com XForms não seja para iniciantes, você pode se interessar por eles. 
    -->
</body>
</html>
