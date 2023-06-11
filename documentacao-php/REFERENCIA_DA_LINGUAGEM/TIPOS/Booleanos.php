<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Booleanos</title>
</head>
<body>
    <h1>Tipos Booleanos</h1>
    <?php 
        //BOOLEANOS
        // Este é o tipo mais simples. Um booleano expressa um valor de verdade. Ele pode ser true ou false.
        //Para especificar um booleano literal, use as palavras-chave true ou false. Ambas são case-insensitive.

            $foo = True; // atribui o vlaor True para $foo


        // Convertendo para booleano 
        //Para converter explicitamente um valor para booleano, utilize os modificadores (bool) ou (boolean).
        var_dump((bool) "");        // bool(false)
        var_dump((bool) 1);         // bool(true)
        var_dump((bool) -2);        // bool(true)
        var_dump((bool) "foo");     // bool(true)
        var_dump((bool) 2.3e5);     // bool(true)
        var_dump((bool) array(12)); // bool(true)
        var_dump((bool) array());   // bool(false)
        var_dump((bool) "false");   // bool(true)

    ?>
</body>
</html>