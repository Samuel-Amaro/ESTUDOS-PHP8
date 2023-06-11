<?php

/**
 * * Exemplo # 1 Diálogo de download
 * 
 * Se desejar que o usuário seja solicitado a salvar os dados que está enviando, como um arquivo PDF gerado, você pode usar o cabeçalho »Content-Disposition para fornecer um nome de arquivo recomendado e forçar o navegador a exibir a caixa de diálogo de salvamento.
*/

//cabeçalho http da categoria que permite especificar informações no corpo da mensagem, como
//Content-Type: Indica o tipo de mídia do recurso.
//O cabeçalho Content-Type é utilizado para indicar o tipo de arquivo (en-US) do recurso.
//Em requisições, como POST ou PUT, o client diz ao servidor qual o tipo de dado que está, de fato, sendo enviado.
//Sintaxe: Content-Type: text/html; charsert=utf-8;

//estamos gerando um PDF
header('Content-Type: application/pdf; charset=utf-8');

//Cabeçalho HTTP da categoria Downloads
//Content-Disposition: Indica se o recurso transmitido deve ser mostrado em linha (inline - comportamento padrão sem o cabeçalho), ou se deve apresentar uma caixa de diálogo "Salvar como". 
//Em uma resposta HTTP normal, o cabeçalho de resposta Content-Disposition indica se o conteúdo é esperado a ser exibido inline no navegador, isso significa, como uma página Web ou parte de uma, ou como um anexo, que é baixado e salvo localmente.
//Em um corpo multipart/form-data, o cabeçalho geral HTTP Content-Disposition é um cabeçalho que pode ser utilizado em uma subparte de um corpo multipartes para dar informações sobre o campo a que ele se aplica. A subparte é delimitada pelo limite definido no cabeçalho Content-Type. Usado no corpo em si, Content-Disposition não tem efeito.
//O cabeçalho Content-Disposition é definido em um grande contexto de mensagens MIME para e-mail, mas somente um subconjunto dos possíveis parâmetros são aplicados à formulários HTTP e requisições POST requests. Somente o valor form-data, assim como a diretiva opcional name e filename, podem ser usadas no contexto HTTP.
//Sintaxe:
//Como cabeçalho de resposta para o corpo principal
//attachment (indicando que ele devev ser baixado; a maioria dos navegadores apresenta uma caixa de diálogo "Salvar como", pré-preenchido com o valor do parâmetro filename se presente).
//É seguido por uma cadeia de caracteres contendo o nome original do arquivo transmitido. O nome do arquivo é sempre opcional e não deve ser usado cegamente pela aplicação: informação de caminho deve ser removida, e conversão para as regras do sistema de arquivo do servidor devem ser feitas. Este parâmetro provém a maior parte da informação indicativa. Quando usado em combinação com Content-Disposition: attachment, ele é usado como nome de arquivo padrão para uma eventual caixa de diálogo "Salvar como" apresentado ao usuário.

//Ele se chamará baixado.pdf
header('Content-Disposition: attachment; filename="downloaded.pdf"');

//A fonte do PDF está em original.pdf
//Produz um arquivo
readfile('original.pdf');

?>