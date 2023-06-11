<?php

/**
 * * EXPLICANDO MENSAGENS DE ERRO
 * 
 *  O PHP retorna um código de erro apropriado na array do arquivo. O código de erro pode ser encontrado no segmento ['error'] da array que é criada pelo PHP durante o upload do arquivo. Em outras palavras, o erro pode ser encontrado em $_FILES['userfile']['error'].
 * 
 * UPLOAD_ERR_OK: Valor: 0; não houve erro, o upload foi bem sucedido.
 * 
 * UPLOAD_ERR_INI_SIZE: Valor 1; O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.
 * 
 * UPLOAD_ERR_FORM_SIZE: Valor: 2; O arquivo excede o limite definido em MAX_FILE_SIZE no formulário HTML.
 * 
 * UPLOAD_ERR_PARTIAL: Valor: 3; O upload do arquivo foi feito parcialmente.
 * 
 * UPLOAD_ERR_NO_FILE: Valor: 4; Nenhum arquivo foi enviado.
 * 
 * UPLOAD_ERR_NO_TMP_DIR: Valor: 6; Pasta temporária ausente.
 * 
 * UPLOAD_ERR_CANT_WRITE: Valor: 7; Falha ao escrever o arquivo no disco.
 * 
 * UPLOAD_ERR_EXTENSION: Valor: 8; Uma extensão do PHP interrompeu o upload do arquivo. O PHP não fornece uma maneira de determinar qual extensão causou a interrupção do upload. Examinar a lista das extensões carregadas com o phpinfo() pode ajudar.
*/

?>