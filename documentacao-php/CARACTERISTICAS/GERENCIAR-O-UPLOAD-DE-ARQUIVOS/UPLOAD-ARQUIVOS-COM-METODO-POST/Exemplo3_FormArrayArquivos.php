<?php 

/**
 * * EXEMPLO #3 ENVIANDO UMA ARRAY DE ARQUIVOS
 * 
 *  O PHP suporta array HTML mesmo com arquivos.
 * 
*/
?>

<!-- o tipo de encoding de dados, enctype, deve ser especificado abaixo -->
<form enctype="multipart/form-data" action="Exemplo2_ValidandoUploadArquivos.php" method="post" target="_self" autocomplete="on" accept-charset="utf8" name="upload-imagens" rel="next">
    <input type="file" name="pictures[]"/>
    <input type="file" name="pictures[]"/>
    <input type="file" name="pictures[]"/>
    <input type="submit" value="Enviar arquivo">
</form>

<?php

foreach($_FILES["pictures"]["error"] as $key => $error) {
    if($error === UPLOAD_ERR_OK) {
       $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
       //basename () pode prevenir ataques de travessia do sistema de arquivos;
       //mais validação / saneamento do nome do arquivo pode ser apropriado
       $name = basename($_FILES["pictures"]["name"][$key]);
       move_uploaded_file($tmp_name, "data/$name");
    }
}