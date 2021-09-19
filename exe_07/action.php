<?php

    $ganhaHora = $_POST['hora'];
    $horas = $_POST['numeroHoras'];

    //se for string e não vazia
    if(gettype($ganhaHora) == 'string' && !(empty($ganhaHora)) && $horas != 0) {
?>
        <p>Você ganha R$ <?= $ganhaHora * $horas; ?> reais.</p>
<?php
    }else{
?>
        <p>Preencha os campos corretamente para o calculo ser realizado!</p>
<?php
    }
?>