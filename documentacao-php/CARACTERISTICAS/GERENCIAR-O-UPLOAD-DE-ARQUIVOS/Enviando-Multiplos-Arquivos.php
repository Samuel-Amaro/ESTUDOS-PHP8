<?php

/**
 * * ENVIANDO MÚLTIPLOS ARQUIVOS
 * 
 * Múltiplos arquivos podem ser enviados usando diferentes nomes (name) para entradas (input).
 * 
 * Também é possível carregar vários arquivos simultaneamente e ter a informação automaticamente organizada em arrays. Para isso, é necessário usar a mesma sintaxe das arrays submetidas pelo formulário HTML que você usa para múltiplos selects e checkboxes:
 * 
 * * EXEMPLO #1 CARREGANDO MÚLTIPLOS ARQUIVOS
 * 
*/
?>
<form action="file-upload.php" method="post" enctype="multipart/form-data" name="form-upload-multiplo-arquivos">
    Envie esses arquivos: <br/>
    <input name="userfile[]" type="file"/>
    <br/>
    <input name="userfile[]" type="file"/>
    <input type="submit" value="Enviar arquivos"/>
</form>

<?php 

/**
 * Quando o formulário acima é submetido, os arrays $_FILES['userfile'], $_FILES['userfile']['name'], e $_FILES['userfile']['size'] serão inicializados.
 * 
 * Por exemplo, suponha os nomes dos arquivos /home/test/review.html e /home/test/xwp.out. Neste caso, $_FILES['userfile']['name'][0] deve conter o valor review.html, e $_FILES['userfile']['name'][1] deve conter o valor xwp.out. Similarmente, $_FILES['userfile']['size'][0] deve conter o tamanho do arquivo review.html, e assim por diante.
 * 
 * $_FILES['userfile']['name'][0], $_FILES['userfile']['tmp_name'][0], $_FILES['userfile']['size'][0], e $_FILES['userfile']['type'][0] também são definidas.
 * 
 * Aviso: O parâmetro max_file_uploads atua como um limite no número de arquivos que podem ser enviados em umá única requisição. Você precisa ter certeza que seu formulário não tentará enviar mais arquivos que o limite definido.
*/

?>