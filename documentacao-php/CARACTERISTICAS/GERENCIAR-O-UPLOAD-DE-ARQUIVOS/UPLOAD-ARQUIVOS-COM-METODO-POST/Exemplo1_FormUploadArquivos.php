<?php

/**
 * * EXEMPLO #1 FORMULÁRIO PARA UPLOAD DE ARQUIVO
 * 
 * Uma interface para upload de arquivo pode ser criada com um formulário especial parecido com este:
*/

?>

<!-- o tipo de encoding de dados, enctype, deve ser especificado abaixo -->
<form enctype="multipart/form-data" action="Exemplo2_ValidandoUploadArquivos.php" method="post" target="_self" autocomplete="on" accept-charset="utf8" name="upload-arquivo-teste" rel="next">
    <!--MAX_FILE_SIZE deve preceder o campo input -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
    <!-- o Nome do elemento input determina o nome da array $_FILES -->
    <label for="userFile">Enviar esse arquivo:</label> 
    <input type="file" name="userFile" id="userFile">
    </br>
    <input type="submit" value="Enviar arquivo">
</form>

<?php

/**
 * O parâmetro __URL__ no exemplo acima deve ser substituido e apontar para um arquivo PHP.
 * 
 * O campo escondido (input type="hidden") MAX_FILE_SIZE (medido em bytes) deve preceder o campo de input de arquivo (input type="file"), e o seu valor é o tamanho limite aceito pelo PHP. Este elemento do formulário deve sempre ser usado para evitar que usuários tenham o problema de ter que esperar pela transferência de um arquivo para só então descobrir que ele era grande demais e a transferência falhar. Fique ciente: é muito simples burlar esse parâmetro pelo lado do navegador, portanto nunca dependa exclusivamente desse recurso para bloquear arquivos com maior tamanho. Isso é um recurso meramente conveniente para usuários da aplicação no lado do cliente. Os parâmetros do PHP (no servidor) para "maximum-size", no entanto, não podem ser burlados.
 * 
 * Nota: Tenha certeza que seu formulário de upload tenha o atributo enctype="multipart/form-data" por outro lado o upload não irá funcionar.
 * 
 * A variável global $_FILES conterá toda a informação do arquivo enviado. O conteúdo do formulário de exemplo acima será como o exemplo descrito abaixo. Note que isso assume o nome do arquivo enviado userfile, como foi usado no script de exemplo acima, contudo isso pode ter qualquer nome.
 
    $_FILES['userfile']['name']
    O nome original do arquivo na máquina do cliente.
  
    $_FILES['userfile']['type']
    O tipo mime do arquivo, se o navegador fornecer essa informação. Um exemplo poderia ser "image/gif". O tipo mime no entanto não é verificado pelo PHP portanto não considere que esse valor será concedido.

    $_FILES['userfile']['size']
    O tamanho, em bytes, do arquivo enviado.

    $_FILES['userfile']['tmp_name']
    O nome temporário com o qual o arquivo enviado foi armazenado no servidor.

    $_FILES['userfile']['error']
    O código de erro associado a esse upload de arquivo.

 * 
 * Os arquivos serão guardados por padrão no diretório temporário do servidor, a menos que outro local seja especificado através da diretiva upload_tmp_dir no php.ini. O diretório padrão do servidor pode ser alterado através da configuração da variável de ambiente TMPDIR no ambiente onde o PHP esta sendo executado. Configurando isso usando putenv() em um script PHP não irá funcionar. Esta variável de ambiente também pode ser usada para certificar que outras operações estão funcionando nos arquivos enviados.
*/

?>