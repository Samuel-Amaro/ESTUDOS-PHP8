<?php

/**
 * * EXEMPLO #6 DECLARAÇÃO DE TIPO DE RETORNO ANULÁVEL
 * 
 *  
*/

//declarando uma função que tem como um tipo de retorno especificado como string ou null, ou retorna uma string ou retorna null
function get_item(): ?string {
    if(isset($_GET['item'])) {
        return $_GET['item'];
    }else{
        return null;
    }
}

?>