<?php 

//Este exemplo ilustra o caso especial "HTTP/"
// Melhores alternativas em casos de uso típicos incluem:
// 1. header ($ _ SERVER ["SERVER_PROTOCOL"]. "404 Not Found");
// (para substituir as mensagens de status http para clientes que ainda usam HTTP / 1.0)
// 2. http_response_code (404); (para usar a mensagem padrão)

header("HTTP/1.1 404 Not Found");

?>