<?php 

/**
 * * COMPARAÇÃO COM VÁRIOS TIPOS
 * 
 * Para vários tipos, comparações são feitas de acordo com a seguinte tabela (em ordem).
 
    TIPO DO 1ª OPERANDO: null ou string;
    TIPO DO 2ª OPERANDO: string;
    RESULTADO: Converte null para "", numérico ou comparação léxica;

    TIPO DO 1ª OPERANDO: bool ou null;
    TIPO DO 2ª OPERANDO: qualquer;
    RESULTADO: Converte para bool, false < true;

    TIPO DO 1ª OPERANDO: object;
    TIPO DO 2ª OPERANDO: object;
    RESULTADO: Classes nativas podem definir como são comparadas, classes diferentes são incomparáveis, mesma classe - compara propriedades igual faz arrays;

    TIPO DO 1ª OPERANDO: string, resource ou number;
    TIPO DO 2ª OPERANDO: string, resource ou number;
    RESULTADO: Transforma strings e resources para números;

    TIPO DO 1ª OPERANDO: array;
    TIPO DO 2ª OPERANDO: array;
    RESULTADO: TransformaArray com menos membros é menor, se a chave do operando 1 não é encontrada no operando 2, então os arrays são incomparáveis, caso contrário - compara valor por valor (veja o seguinte exemplo);

    TIPO DO 1ª OPERANDO: object;
    TIPO DO 2ª OPERANDO: qualquer;
    RESULTADO: object é sempre maior;

    TIPO DO 1ª OPERANDO: array;
    TIPO DO 2ª OPERANDO: qualquer;
    RESULTADO: array é sempre maior;

 * 
 * Exemplo #1 Comparações de boolean e null
*/

//Boll e null são sempre comparados como booleanos
var_dump(1 == TRUE); //TRUE - IGUAL A (BOOL) 1 == TRUE 
var_dump(0 == FALSE); //TRUE - IGUAL A(BOOL) 0 == FALSE
var_dump(100 < TRUE); //FALSE - IGUAL A(BOOL) 100 < TRUE
var_dump(-10 < FALSE); //FALSE - IGUAL A(BOOL) -10 < 
//encontrar o menor valor
//min(array $values, mixed $valu1[,]..) : string
var_dump(min(-100, -10, NULL, 10, 100)); //NULL - (BOOL) NULL < (BOLL) - 10 E FALSE < TRUE

//EXEMPLO 2 - Transcrição do padrão de comparação de array

//Arrays são comparados assim quando utilizando-se os operadores padrão

function standard_array_compare($op1, $op2) {
    //Conte todos os elementos em uma matriz(array) ou algo em um objeto
    //count(mista $ array_or_countable [, int $ mode = COUNT_NORMAL]): int
    if(count($op1) < count($op2)) {
        return -1; //$op1 < $op2
    }elseif(count($op1) > count($op2)) {
        return 1; //$op1 > $op2
    }
    foreach($op1 as $key => $val) {
        if(!array_key_exists($key, $op2)) {
            return null; //incomparavel
        }elseif($val < $op2[$key]) {
            return -1;
        }elseif($val > $op2[$key]) {
            return 1;
        }
    }
    return 0; //$op1 == $op2
}

?>