<?php

/**
 * * EXEMPLO #1 SALVANDO ARQUIVOS HTTP PUT
 * 
 *  
*/

/*put data vem do fluxo stfin*/
$putdata = fopen("php://input", "r");

/*abre um arquivo para escrita*/
$fp = fopen("myputfile.ext", "w");

/*Lê os dados 1KB de cada vez e escreve no arquivo*/
while($data = fread($putdata, 1024))
    fwrite($fp, $data);

/*fecha os fluxos*/
fclose($fp);
fclose($putdata);

?>