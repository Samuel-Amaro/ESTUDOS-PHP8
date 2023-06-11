<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Separação de instruções</title>
</head>
<body>
    
    <h1>Separação de instruções</h1>

    <!-- Como no C ou Perl, o PHP requer que as instruções sejam terminadas com um ponto-e-vírgula ao final de cada comando. A tag de fechamento de um bloco de código PHP automaticamente implica em um ponto-e-vírgula; -->

    <!-- exemplo mostrando a tag de fechamento incluindo uma nova linha final -->
    
    <?php echo "Algum texto"; ?>
    Sem nova linha
    <?= "Mas uma nova linha agora" ?>

    <!-- exemplos de entrar e sair do modo PHP -->
    <?php echo 'Isto é um teste';?>

    <?php echo 'Isto é um teste' ?>

    <?php echo 'Nós omitimos a última tag de fechamento';
    
    /**
        * Nota: A tag de fechamento de um bloco PHP ao final de um arquivo é opcional, e em alguns casos omiti-la é útil ao utilizar include ou require, assim espaços em branco indesejados não irão aparecer ao final dos arquivos, e ainda, será capaz de adicionar cabeçalhos à resposta. Também é útil se usar o buffer de saída, e você não gostaria de um espaço em branco indesejado ao final das partes geradas por arquivos incluídos. 
    */
</body>
</html>