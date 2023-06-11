<?php
    
$numero = $_POST['numero'];

//o valor informado e do tipo string, verifica se uma string não vazia
if(is_string($numero) && $numero != "") {
    
    $arrayNumeros = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
    //$arrayLetras = {'a', 'A', 'b', 'B', 'c', 'C', 'd', 'D', 'e', 'E', 'f', 'F', 'g', 'G', 'h', 'H', 'i', 'I', 'j', 'J', 'k', 'K', 'l', 'L', 'm', 'M', 'n', 'N', 'o', 'O', 'p', 'P', 'q', 'Q','r', 'R', 's', 'S', 't', 'T', 'u', 'U', 'v', 'V','w', 'W', 'x', 'X', 'y', 'Y', 'z', 'Z', '*', '/', '\'', '\"', '\\'};

    //variaiveis 
    $numeroFloat = NULL;
    $numeroDouble = NULL;
    $numeroInteiro = NULL;
    $possuiNumerosTrue = 0;
    $possuiNumerosFalse = 0;

    //se a string não possui nenhum numero e porque são todos caracteres
    for($i = 0; $i < strlen($numero); $i++) {
        for($j = 0; $j < count($arrayNumeros); $j++) {
            if($numero[$i] == $arrayNumeros[$j]) {
                $possuiNumerosTrue++; 
             }else{
                 $possuiNumerosFalse++;
             }
        }
    }

    //a string possui numeros
    if($possuiNumerosTrue > $possuiNumerosFalse) {
        //echo "$"
        //obtem o tipo do numero
        for($i = 0; $i < strlen($numero); $i++) {
            //numeros com virgula ou ponto e são floats ou duples
            if($numero[$i] == '.' || $numero[$i] == ',') {
                $numeroFloat = floatval($numero);
                $numeroDouble = doubleval($numero);

            }else{
                //numero inteiro
                $numeroInteiro = intval($numero);    
            }
        }


        //emite uma mensagem correta de acordo com o tipo 
        if(is_double($numeroDouble)) {
            echo "Numero Flutuante de dupla precisão: $numeroDouble " . gettype($numeroDouble) . "<br/>";
        }else if(is_float($numeroFloat)) {
            echo "Numero Flutuante de unica precisão: $numeroFloat " . gettype($numeroFloat) . "<br/>";
        }else if(is_int($numeroInteiro)) {
            echo "Numero Inteiro: $numeroInteiro " . gettype($numeroInteiro) . "<br/>";
        }

        echo "O número informado foi $numero <br/>";
    }else{
        //string não possui numeros
        echo "Informe numeros por favor!";
    }

     

}else{
    echo "Informe um numero valido <br/>";
}
    
?>