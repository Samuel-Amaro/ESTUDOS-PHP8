<?php 

/**
 * * EXEMPLO #2 VALIDANDO UPLOAD DE ARQUIVOS
 * 
 *  Veja também as funções is_uploaded_file() e move_uploaded_file() para maiores informações. O exemplo a seguir irá processar o upload de um arquivo que vem de um formulário.
*/

echo '<pre>';
echo 'Aqui está mais informações de debug: ';
print_r($_FILES);
echo "<code>Errors: {$_FILES['userFile']['error']}</code>";
echo '</pre>';

/**
 * O script PHP que recebe o arquivo enviado deve implementar qualquer lógica que for necessária para determinar o que deve ser feito com o arquivo enviado.  
 * 
 * Você pode, por exemplo, usar a variável $_FILES['userfile']['size'] para descartar qualquer arquivo que seja muito pequeno ou muito grande. Você pode usar a variável $_FILES['userfile']['type'] para descartar arquivos imcompatíveis com um determinado critério, mas use isso apenas como a primeira de uma serie de verificações, porque esse valor está totalmente sob o controle do cliente e não é verificado pelo PHP. Você também pode usar $_FILES['userfile']['error'] e planejar sua lógica de acordo com os Códigos de erro. Independente da lógica, você também deve apagar o arquivo do diretório temporário ou movê-lo para outro local.
 * 
 * Se nenhum arquivo for selecionado em seu formulário, o PHP irá retornar $_FILES['userfile']['size'] como 0, e $_FILES['userfile']['tmp_name'] como "none" (nenhum).
 * 
 * O arquivo será excluído do diretório temporário ao fim da requisição se ele não for movido ou renomeado.
*/

?>