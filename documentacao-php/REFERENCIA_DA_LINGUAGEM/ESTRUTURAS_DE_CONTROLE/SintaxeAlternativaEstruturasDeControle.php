<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Controle</title>
</head>
<body>
    <h1>Sintaxe Alternativa para estruturas de controle</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea soluta harum sit error, assumenda autem vel debitis libero illum cum dicta corporis corrupti, sunt molestias fugiat. Magnam, praesentium. Beatae, libero.</p>
    <?php $a = 5; ?>
    <?php if($a == 5):?>
      <p>A é igual a 5</p>
    <?php endif; ?>   
</body>
</html>
<?php

/**
 * * SINTAXE ALTERNATIVA PARA ESTRUTURAS DE CONTROLE
 * 
 *  O PHP oferece uma sintaxe alternativa para algumas estruturas de controle; a saber, if, while, for, foreach, e switch. Em cada caso, basicamente a sintaxe alternativa é trocar a chave de abertura por dois pontos (:) e a chave de fechamento por endif;, endwhile;, endfor;, endforeach;, ou endswitch;, respectivamente.
 * 
 * No exemplo acima, o bloco HTML "A é igual a 5" está dentro de um if escrito na sintaxe alternativa. O bloco HTML será exibido somente se $a for igual a 5.
 * 
 * A sintaxe alternativa também se aplica ao else e elseif. A seguir um exemplo de um if com elseif e else no formato alternativo:
*/

if($a == 5):
    echo "a e igual a 5";
    echo "...";
elseif($a == 6):
    echo "a igual 6";
    echo "!!!";
else:
    echo "a esta entre 5 e 6";
endif;
?>