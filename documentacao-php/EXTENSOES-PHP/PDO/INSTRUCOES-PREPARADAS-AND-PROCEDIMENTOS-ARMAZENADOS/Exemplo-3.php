<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca Dados</title>
</head>
<body>
    <header>
        <h2>Buscando Dados Usando instruções preparadas</h2>
        <nav>
            <a href="#">Link</a>
            <a href="#">Link</a>
        </nav>
    </header>
    <main>
        <h3>Entre com o nome do cliente</h3>
        <section>
            <!--
                'PHP_SELF' : O nome do arquivo do script que está executando, relativa à raiz do documento. Por exemplo, $_SERVER['PHP_SELF'] em um script no endereço http://example.com/test.php/foo.bar seria /test.php/foo.bar. A constante __FILE__ contém o caminho completo e nome do atual arquivo

                - o action deste form, vai ser esse proprio script, tratara os erros e o processamento do formulario nesse mesmo script
            -->
            <form action="Exemplo-3-Action.php" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="on" name="form_cliente" accept-charset="utf-8" rel="next" target="_self">
                <input type="search" name="nome" id="nome" required>
                </br>
                </br>
                <input type="submit" value="Pesquisar!">
            </form>
        </section>
    </main>
</body>
</html>
