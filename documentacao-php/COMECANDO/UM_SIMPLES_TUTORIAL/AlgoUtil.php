<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        /**
         * * ALGO UTIL
         * 
         * Vamos fazer alguma coisa um pouco mais útil agora. Nós iremos checar qual é o tipo de navegador que o visitante está utilizando para ver a nossa página. Para fazer isto nós iremos checar qual é o valor da string agente que o navegador envia como parte de sua requisição HTTP. Esta informação é armazenada em uma variável. Variáveis sempre começam com um símbolo de cifrão no PHP. A variável que nos interessa no momento é $_SERVER['HTTP_USER_AGENT'].
         * 
         * Nota: $_SERVER é uma variável especial reservada do PHP que contém todas as informações sobre o servidor web. Ela é conhecida como uma superglobal.
         * 
         * Para exibir esta variável, nós podemos fazer isto:
        */

        //Exemplo #1 Imprimindo uma variável (elemento do Array)

        echo $_SERVER['HTTP_USER_AGENT'] . '<br/>';

        /**
         * Há muitos tipos de variáveis disponíveis no PHP. No exemplo acima nós imprimimos um elemento do Array. Arrays podem ser muito úteis. 
         * 
         * $_SERVER é somente uma das variáveis que o PHP automaticamente disponibiliza para você. 
         * 
         * Você pode colocar múltiplas instruções PHP dentro da tag PHP e criar pequenos blocos de códigos que fazem muito mais do que um simples echo. Por exemplo, se você quer checar se o navegador é o Internet Explorer você pode fazer isso:
        */

        //Exemplo #2 Exemplo utilizando estruturas de controle e funções

        if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
            echo 'Você esta usando o Internet Explorer. <br/>';   
        }else{
            echo 'Você não esta usando o Internet Explorer <br/>';
        }

        /**
         * Aqui nós introduzimos alguns conceitos novos. Nós temos a declaração if. Se você está familiarizado com a sintaxe básica usada pela linguagem C isto parecerá ser lógico para você.
         * 
         * O segundo conceito que iremos abordar é a chamada à função strpos(). A função strpos() vem junto com o PHP e busca uma palavra em outra palavra. Neste caso nós estamos procurando pelo texto 'MSIE' dentro de $_SERVER['HTTP_USER_AGENT']. Se a palavra for encontrada, a função retorna a posição do texto pesquisado em relação ao começo do texto onde houve a pesquisa. Se a palavra não for encontrada a função retorna false. Neste exemplo, se não retornar false o if avalia para true e o código dentro dos {colchetes} é executado. Caso contrário o código não roda. 
         * 
         * Nós podemos avançar agora e mostrar a você como alternar entre os modos PHP mesmo que você esteja executando blocos de códigos:
        */

        //Exemplo #3 Mesclando entre os modos PHP e HTML
        if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    ?>
        
    <h3>strpos() deve ter retornado não falso</h3>
    <p>Você esta usando o internet Explorer</p>
        
    <?php 
        } else {
    ?>

    <h3>strpos() deve ter retornado falso</h3>
    <p>Você não esta usando o internet Explorer</p> 
    
    <?php 

        }

        /**
         * Ao invés de usar a declaração echo do PHP para imprimir a saída dos dados, nós saímos do modo do PHP e usamos o HTML normal. O importante a notar aqui é que a lógica do script continua intacta. Somente um dos blocos HTML será enviado dependendo do resultado da chamada à função strpos(). Em outras palavras, depende se a palavra MSIE for encontrada ou não. 
        */
    ?>

</body>
</html>

